<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\ContratPlus;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportBulletinSouscription extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $type       = $request->type;
        $date_start = $request->date_start;
        $date_end   = $request->date_end;

        if($type == 'cspe')
            $contrats = \App\Models\Contrat::whereBetween('created_at' , [$date_start , $date_end])->get();
        else
            $contrats = \App\Models\ContratPlus::whereBetween('created_at' , [$date_start , $date_end])->get();

        foreach($contrats as $contrat){
            if($type == 'cspe'){
                $pdf = Pdf::loadView('pages.export.cspe.bulletin', ['contrat' => $contrat]);
            }
            else{
                $pdf = Pdf::loadView('pages.export.cspeplus.bulletin', ['contrat' => $contrat]);
            }
            $pdf->save("cspe/" . $contrat->rum . '-' . str_replace('/' , '-' , $contrat->nom) . "-" . str_replace('/' , '-' , $contrat->prenom) . ".pdf");
        }

    }
}
