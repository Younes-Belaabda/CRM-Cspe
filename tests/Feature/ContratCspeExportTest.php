<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Export\ExportCspe;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContratCspeExportTest extends TestCase
{
    use RefreshDatabase;

    public function test_setview_function(): void
    {
        ($exportcontrat = new ExportCspe())->setView('pages.export.cspe.document.1');

        $this->assertSame('pages.export.cspe.document.1' , $exportcontrat->view);
    }

    public function test_setcontrat_function(): void
    {
        // seed data
        $this->seed(DatabaseSeeder::class);

        $contrat = \App\Models\Contrat::first();

        ($exportcspe = new ExportCspe())->setContrat($contrat);

        $this->assertEquals($contrat , $exportcspe->contrat);
    }
}
