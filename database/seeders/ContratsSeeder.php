<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Contrat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Seeder;
use App\Mail\cspe\CspeDocument1;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContratsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contrats = [
            [
                'genre'   => 'Mme',
                'nom'     => 'ROTMANN BOISSY',
                'prenom'  => 'CHRISTINE',
                'adresse' => '6 la varenne hodier',
                'date'    => Carbon::createFromFormat('d/m/Y' , "31/01/1956"),
                'zipcode'     => '28200',
                'ville'   => 'donnemain st mames',
                'pays'    => 'France',
                'mobile'  => '620200937',
                'telephone' => '620200937',
                'mail'    => 'belaabda.py@gmail.com',
                'iban'    => 'FR4520041010060556148K02751',
                'bic'     => 'PSSTFRPPLIM',
                'status'  => 'En attente client',
                'user_id' => 1
            ],
            // [
            //     'genre'   => 'Mme',
            //     'nom'     => 'SAID',
            //     'prenom'  => 'MARIA',
            //     'adresse' => '5 RUE MARTYRS DE LA RESISTANCE 3',
            //     'date'    => Carbon::createFromFormat('d/m/Y' , "02/02/1972"),
            //     'zipcode'     => '69200',
            //     'ville'   => 'VENISSIEUX',
            //     'pays'    => 'France',
            //     'mobile'  => '650419664',
            //     'telephone' => '650419664',
            //     'mail'    => '',
            //     'iban'    => 'FR2830002027370000011608D89',
            //     'bic'     => 'CRLYFRPP',
            //     'status'  => 'En attente client',
            //     'user_id' => 1
            // ],
            // [
            //     'genre'   => 'Mme',
            //     'nom'     => 'THOMAZON',
            //     'prenom'  => 'MONIQUE',
            //     'adresse' => '9 RUE BASSE',
            //     'date'    => Carbon::createFromFormat('d/m/Y' , "09/11/1957"),
            //     'zipcode'     => '23230',
            //     'ville'   => 'GOUZON',
            //     'pays'    => 'France',
            //     'mobile'  => '627960010',
            //     'telephone' => '627960010',
            //     'mail'    => '',
            //     'iban'    => 'FR9620041010060691635D02777',
            //     'bic'     => 'PSSTFRPPLIM',
            //     'status'  => 'En attente client',
            //     'user_id' => 1
            // ],
            // [
            //     'genre'   => 'Mme',
            //     'nom'     => 'DA CUNHA OLIVEIRA',
            //     'prenom'  => 'MARIA',
            //     'adresse' => '71 RUE EMILE ZOLA',
            //     'date'    => Carbon::createFromFormat('d/m/Y' , "24/03/1963"),
            //     'zipcode'     => '95870',
            //     'ville'   => 'BEZONS',
            //     'pays'    => 'France',
            //     'mobile'  => '689804793',
            //     'telephone' => '689804793',
            //     'mail'    => '',
            //     'iban'    => 'FR7618707000203121962977665',
            //     'bic'     => 'CCBPFRPPVER',
            //     'status'  => 'En attente client',
            //     'user_id' => 1
            // ],
            // [
            //     'genre'   => 'Mme',
            //     'nom'     => 'logbo',
            //     'prenom'  => 'BOUGOUHI',
            //     'adresse' => '29 RUE DE LA FOLLEA VOINE',
            //     'date'    => Carbon::createFromFormat('d/m/Y' , "12/01/1980"),
            //     'zipcode'     => '77240',
            //     'ville'   => 'VERTSTDENIS',
            //     'pays'    => 'France',
            //     'mobile'  => '601814047',
            //     'telephone' => '601814047',
            //     'mail'    => '',
            //     'iban'    => 'FR7610107007120032603370579',
            //     'bic'     => 'BREDFRPPXXX',
            //     'status'  => 'En attente client',
            //     'user_id' => 1
            // ],
        ];

        foreach($contrats as $contrat){
            $mycontrat = Contrat::create($contrat);
            $pdf = Pdf::loadView('pages.export.cspe.document-1', ['contrat' => $mycontrat]);
            Mail::to($mycontrat->mail)->send(new CspeDocument1($mycontrat , $pdf));
        }
    }
}
