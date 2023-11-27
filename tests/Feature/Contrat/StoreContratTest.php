<?php

namespace Tests\Feature\Contrat;

use Carbon\Carbon;
use Tests\TestCase;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreContratTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_store_cspe_contrat(): void
    {
        // seed data
        $this->seed(DatabaseSeeder::class);

        $contrat = [
            'type' => 'cspe',
            'genre'  => 'M',
            'nom'     => 'Belaabda',
            'prenom'  => 'Younes',
            'adresse' => 'Fake Addresse',
            'bday'   => '10',
            'bmonth' => '01',
            'byear'  => '1990',
            'zipcode' => '12345',
            'ville'   => 'ville',
            'pays'    => 'france',
            'mobile'  => '0606060606',
            'telephone' => '0606060606',
            'mail'    => 'mail@mail.com',
            'iban'    => 'FR1323214242421',
            'bic'     => 'BIC12345',
            'status'  => 'En attente client',
            'user_id' => \App\Models\User::first()->id
        ];

        $response = $this->actingAs(\App\Models\User::first())->post('/agent/contrat/store' , $contrat);

        $response->assertRedirectToRoute('agent.contrat.signature' , ['contrat' => \App\Models\Contrat::orderBy('id' , 'desc')->first()]);

    }
    public function test_store_cspeplus_contrat(): void
    {
        // seed data
        $this->seed(DatabaseSeeder::class);

        $contrat = [
            'type' => 'cspeplus',
            'genre'  => 'M',
            'nom'     => 'Belaabda',
            'prenom'  => 'Younes',
            'adresse' => 'Fake Addresse',
            'bday'   => '10',
            'bmonth' => '01',
            'byear'  => '1990',
            'zipcode' => '12345',
            'ville'   => 'ville',
            'pays'    => 'france',
            'mobile'  => '0606060606',
            'telephone' => '0606060606',
            'mail'    => 'mail@mail.com',
            'iban'    => 'FR1323214242421',
            'bic'     => 'BIC12345',
            'status'  => 'En attente client',
            'user_id' => \App\Models\User::first()->id
        ];

        $response = $this->actingAs(\App\Models\User::first())->post('/agent/contrat/store' , $contrat);

        $response->assertRedirectToRoute('agent.contrat.signatureplus' , ['contrat' => \App\Models\ContratPlus::orderBy('id' , 'desc')->first()]);

    }
}
