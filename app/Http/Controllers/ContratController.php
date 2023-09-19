<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Contrat;
use App\Events\EmailOpened;
use App\Models\ContratPlus;
use App\Mail\ContratCreated;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreContratRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Uid\Uuid;

class ContratController extends Controller
{
    public function create(){
        return view('pages.agent.contract.create');
    }

    public function store(StoreContratRequest $request){

        $validated = $request->validated();

        // // Validate Date
        $day   = $request->bday;
        $month = $request->bmonth;
        $year  = $request->byear;

        // Insert Contrat [DB]
        if($request->type == 'cspe')
            $contrat = Contrat::create([
                'genre'  => $request->genre,
                'nom'     => $request->nom,
                // 'rum' =>  IdGenerator::generate(['table' => 'contrats', 'field' => 'rum' , 'length' => 12, 'prefix' => 'cspe°']),
                // 'uid' => Uuid::v1(),
                'prenom'  => $request->prenom,
                'adresse' => $request->adresse,
                'date'    => Carbon::createFromFormat('d/m/Y' , "$day/$month/$year"),
                'zipcode'     => $request->zipcode,
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
        else
            $contrat = ContratPlus::create([
                'genre'  => $request->genre,
                'nom'     => $request->nom,
                // 'rum' =>  IdGenerator::generate(['table' => 'contrats', 'length' => 9, 'prefix' => 'c°']),
                'prenom'  => $request->prenom,
                'adresse' => $request->adresse,
                'date'    => Carbon::createFromFormat('d/m/Y' , "$day/$month/$year"),
                'zipcode'     => $request->zipcode,
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

        if($request->type == 'cspe'){
            $pdf = Pdf::loadView('pages.export.cspe.document-1', ['contrat' => $contrat]);
        }
        else{
            $pdf = Pdf::loadView('pages.export.cspeplus.document-1', ['contrat' => $contrat]);
        }


        if($request->type == 'cspe'){
            Mail::to($contrat->mail)->send(new \App\Mail\cspe\CspeDocument1($contrat , $pdf));
        }
        else{
            Mail::to($contrat->mail)->send(new \App\Mail\cspeplus\CspeDocument1($contrat , $pdf));
        }


        if($request->type == 'cspe')
            return redirect()->route('agent.contrat.signature' , ['contrat' => $contrat]);
        else
            return redirect()->route('agent.contrat.signatureplus' , ['contrat' => $contrat]);
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
        $contrats = Auth::user()->contrats->reverse();
        return view('pages.agent.contract.all' , compact('contrats'));
    }

    public function all_plus(){
        $contrats = Auth::user()->contratsplus->reverse();
        return view('pages.agent.contract.allplus' , compact('contrats'));
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
