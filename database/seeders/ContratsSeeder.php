<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'nom'     => 'GALIUSSI',
                'prenom'  => 'PATRICIA VERONIQUE',
                'adresse' => '84 Rue Chaminade',
                'date'    => Carbon::createFromFormat('d/m/Y' , "10/05/1957"),
                'zipcode'     => '81500',
                'ville'   => 'FIAC',
                'pays'    => 'France',
                'mobile'  => '768774687',
                'telephone' => '768774687',
                'mail'    => 'patriciamokhtar@outlook.fr',
                'iban'    => 'FR7616598000010306037000116',
                'bic'     => 'FPELFR21',
                'status'  => 'En attente client',
                'user_id' => 1
            ],
            [
                'genre'   => 'Mme',
                'nom'     => 'NAIMA',
                'prenom'  => 'IQBAL',
                'adresse' => '18 BOULEVARD LEO LAGRANGE',
                'date'    => Carbon::createFromFormat('d/m/Y' , "14/12/1960"),
                'zipcode'     => '37510',
                'ville'   => 'BALLAN MIRE',
                'pays'    => 'France',
                'mobile'  => '650200437',
                'telephone' => '650200437',
                'mail'    => 'naima.baarab@outlook.fr',
                'iban'    => 'FR7614505000020403406621160',
                'bic'     => 'CEPAFRPP450',
                'status'  => 'En attente client',
                'user_id' => 1
            ],
            [
                'genre'   => 'Mme',
                'nom'     => 'chantal et PAUL MARIE',
                'prenom'  => 'DUPAS',
                'adresse' => '113 RUE ALFRED THAUVOYE',
                'date'    => Carbon::createFromFormat('d/m/Y' , "14/06/1952"),
                'zipcode'     => '59119',
                'ville'   => 'WAZIERS',
                'pays'    => 'France',
                'mobile'  => '609012114',
                'telephone' => '609012114',
                'mail'    => 'chantaletpauldup@hotmail.com',
                'iban'    => 'FR7615629027010007670364076',
                'bic'     => 'CMCIFR2AXXX',
                'status'  => 'En attente client',
                'user_id' => 1
            ],
            [
                'genre'   => 'M',
                'nom'     => 'BOBILLIER MONNOT',
                'prenom'  => 'ANDRE',
                'adresse' => '371 CHEM STE SUZANNE',
                'date'    => Carbon::createFromFormat('d/m/Y' , "28/07/1949"),
                'zipcode'     => '30390',
                'ville'   => 'ARAMON',
                'pays'    => 'France',
                'mobile'  => '626981362',
                'telephone' => '626981362',
                'mail'    => 'andre.bobilliermonnot@outlook.fr',
                'iban'    => 'FR6220041010091232868V03080',
                'bic'     => 'PSSTFRPPMON',
                'status'  => 'En attente client',
                'user_id' => 1
            ],
            [
                'genre'   => 'M',
                'nom'     => 'FAUGIER',
                'prenom'  => 'MYRIAM et Patrick',
                'adresse' => '28 RUE LOUIS SOULIE',
                'date'    => Carbon::createFromFormat('d/m/Y' , "12/05/1957"),
                'zipcode'     => '42000',
                'ville'   => 'SAINT ETIENNE',
                'pays'    => 'France',
                'mobile'  => '777947530',
                'telephone' => '777947530',
                'mail'    => 'faugier.patrick1961@gmail.com',
                'iban'    => 'FR7720041010070827393N03806',
                'bic'     => 'PSSTFRPPLYO',
                'status'  => 'En attente client',
                'user_id' => 1
            ],
            // [
            //     'genre'   => 'Mme',
            //     'nom'     => 'ROTMANN BOISSY',
            //     'prenom'  => 'CHRISTINE',
            //     'adresse' => '6 la varenne hodier',
            //     'date'    => Carbon::createFromFormat('d/m/Y' , "31/01/1956"),
            //     'zipcode'     => '28200',
            //     'ville'   => 'donnemain st mames',
            //     'pays'    => 'France',
            //     'mobile'  => '620200937',
            //     'telephone' => '620200937',
            //     'mail'    => '',
            //     'iban'    => 'FR4520041010060556148K02751',
            //     'bic'     => 'PSSTFRPPLIM',
            //     'status'  => 'En attente client',
            //     'user_id' => 1
            // ],
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
            Mail::to($mycontrat->mail)->send(new \App\Mail\cspe\CspeDocument1($mycontrat , $pdf));
        }
    }
}
