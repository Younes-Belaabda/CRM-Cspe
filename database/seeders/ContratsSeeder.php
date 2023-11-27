<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Contrat;
use App\Models\ContratPlus;
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
        $contrat = [
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
                'user_id' => \App\Models\User::first()->id
        ];

        $mycontrat = Contrat::create($contrat);
        $mycontrat = ContratPlus::create($contrat);
    }
}
