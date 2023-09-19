<?php

namespace App\Http\Controllers;

use App\Mail\ContratCreated;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\ContratCspeVcSignature;
use Illuminate\Support\Facades\Mail;

class PDFController extends Controller
{
    public function cspe(\App\Models\Contrat $contrat , $doc){
        if($doc == 1){
            $pdf = Pdf::loadView('pages.export.cspe.document-1', ['contrat' => $contrat]);
            Mail::to($contrat->mail)->send(new \App\Mail\cspe\CspeDocument1($contrat , $pdf));
        }
        else{
            $pdf = Pdf::loadView('pages.export.cspe.document-2', ['contrat' => $contrat]);
            Mail::to($contrat->mail)->send(new \App\Mail\cspe\CspeDocument2($contrat , $pdf));
        }
        return back();
    }
    public function cspeplus(\App\Models\ContratPlus $contrat , $doc){
        if($doc == 1){
            $pdf = Pdf::loadView('pages.export.cspeplus.document-1', ['contrat' => $contrat]);
            Mail::to($contrat->mail)->send(new \App\Mail\cspeplus\CspeDocument1($contrat , $pdf));
        }
        else{
            $pdf = Pdf::loadView('pages.export.cspeplus.document-2', ['contrat' => $contrat]);
            Mail::to($contrat->mail)->send(new \App\Mail\cspeplus\CspeDocument2($contrat , $pdf));
        }
        return back();
    }
}
