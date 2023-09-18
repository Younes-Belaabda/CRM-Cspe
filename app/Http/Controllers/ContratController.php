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

class ContratController extends Controller
{
    public function all(){
        $contrats = Auth::user()->contrats->reverse();
        return view('pages.agent.contract.all' , compact('contrats'));
    }

    public function all_plus(){
        $contrats = Auth::user()->contratsplus->reverse();
        return view('pages.agent.contract.allplus' , compact('contrats'));
    }

    public function new(){
        return view('pages.agent.contract.new');
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

        if($request->type == 'cspe')
            $pdf = Pdf::loadView('pages.export.cspe.document-1', ['contrat' => $contrat]);
        else
            $pdf = Pdf::loadView('pages.export.cspeplus.document-1', ['contrat' => $contrat]);


        if($request->type == 'cspe'){
            Mail::to($contrat->mail)->send(new \App\Mail\cspe\CspeDocument1($contrat , $pdf));
            
        }
        else{
            Mail::to($contrat->mail)->send(new \App\Mail\cspeplus\CspeDocument1($contrat , $pdf));
            // Mail::to($contrat->mail)->send(new \App\Mail\cspeplus\CspeDocument2($contrat , $pdf));
        }

        return redirect()->route('signature' , ['contrat' => $contrat]);

    }

    public function signature(Contrat $contrat){
        if($contrat->status == 'Validé call')
            return abort(403 , 'Deja signé');
        return view('pages.agent.contract.signature' , ['contrat' => $contrat]);
    }


    // La page de signature client
    public function cspe($contrat){
        // dd($contrat);
        $contrat = \App\Models\Contrat::find($contrat)->first();
        if($contrat->status == 'Validé call')
            return abort(403 , 'Deja signé');
        if(!$contrat->is_mail_opened){
            $contrat->is_mail_opened = true;
            $contrat->save();
            EmailOpened::dispatch();
        }
        return view('pages.client.signature' , compact('contrat'));
    }

}
