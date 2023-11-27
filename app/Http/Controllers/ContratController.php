<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Contrat;
use App\Export\ExportCspe;
use App\Events\EmailOpened;
use App\Models\ContratPlus;
use App\Mail\ContratCreated;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\Uid\Uuid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreContratRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Validation\ValidationException;

class ContratController extends Controller
{
    use \App\Traits\ContratSheetTrait;
    public function create(){
        return view('pages.agent.contract.create');
    }

    public function create_dump(){
        $values  = $this->get_values();
        $values  = $this->append_bic($values);
        $contrat = $values[0];
        return view('pages.agent.contract.create-dump' , ['contrat' => $contrat]);
    }

    public function store(StoreContratRequest $request){
        // insert both cspe & cspeplus contrats
        $validated       = $request->validated();
        $request['date'] = "$request->bday/$request->bmonth/$request->byear";
        $type            = $request->type;
        $cspeConfig = [
            'cspe' => [
                'model'  => 'App\\Models\\Contrat',
                'export' => 'App\\Export\\ExportCspe',
                'document' => 'pages.export.cspe.document-1',
                'route' => 'agent.contrat.signature'
            ],
            'cspeplus' => [
                'model'  => 'App\\Models\\ContratPlus',
                'export' => 'App\\Export\\ExportCspePlus',
                'document' => 'pages.export.cspeplus.document-1',
                'route' => 'agent.contrat.signatureplus'
            ]
        ];
        $contrat = $cspeConfig[$type]['model']::create([
            'genre'  => $request->genre,
            'nom'     => $request->nom,
            'prenom'  => $request->prenom,
            'adresse' => $request->adresse,
            'date'    => Carbon::createFromFormat('d/m/Y' , $request->date),
            'zipcode' => $request->zipcode,
            'ville'   => $request->ville,
            'pays'    => $request->pays,
            'mobile'  => $request->mobile,
            'telephone' => $request->telephone,
            'mail'    => $request->mail,
            'iban'    => $request->iban,
            'bic'     => $request->bic,
            'status'  => 'En attente client',
            'user_id' => Auth::user()->id
        ]);
        $exportcspe = new $cspeConfig[$type]['export']();
        $exportcspe->setView($cspeConfig[$type]['document'])->setContrat($contrat)->setPdf()->sendMail();
        return redirect()->route($cspeConfig[$type]['route'] , ['contrat' => $contrat]);
    }

    public function signature(Contrat $contrat){
        if($contrat->status == 'Validé call')
            return abort(403 , 'Deja signé');
        return view('pages.agent.contract.signature' , ['contrat' => $contrat]);
    }

    public function signatureplus(ContratPlus $contrat){
        if($contrat->status == 'Validé call')
            return abort(403 , 'Deja signé');
        return view('pages.agent.contract.signatureplus' , ['contrat' => $contrat]);
    }


    public function all(){
        // $contrats = Auth::user()->contrats->reverse();
        $contrats = \App\Models\Contrat::latest()->paginate(10);
        return view('pages.agent.contract.all' , compact('contrats'));
    }

    public function all_plus(){
        $contrats = Auth::user()->contratsplus->reverse();
        return view('pages.agent.contract.allplus' , compact('contrats'));
    }

    /**
     * Change status to valide au call
     */
    public function signer(Contrat $contrat){
        $contrat->status = "Validé call";
        $contrat->save();
        return back();
    }











    /**
     * Client Zone
     */
    public function signatureCspe(Contrat $contrat){
        if($contrat->status == 'Validé call')
            return abort(403 , 'Deja signé');
        if(!$contrat->is_mail_opened){
            $contrat->is_mail_opened = true;
            $contrat->save();
            EmailOpened::dispatch();
        }
        return view('pages.client.signature' , compact('contrat'));
    }
    public function signatureCspePlus(ContratPlus $contrat){
        if($contrat->status == 'Validé call')
            return abort(403 , 'Deja signé');
        if(!$contrat->is_mail_opened){
            $contrat->is_mail_opened = true;
            $contrat->save();
            EmailOpened::dispatch();
        }
        return view('pages.client.signatureplus' , compact('contrat'));
    }

    /**
     * Export Zone
     */
    public function iframe(Contrat $contrat){
        return view('pages.iframe.cspe' , compact('contrat'));
    }

    public function iframeCspePlus(ContratPlus $contrat){
        return view('pages.iframe.cspeplus' , compact('contrat'));
    }
}
