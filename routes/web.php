<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Homepage
    Route::get('/', function () {
        return view('welcome');
    });

    // Agent
    Route::prefix('agent/')->name('agent.')->group(function(){
        Route::prefix('contrat/')->name('contrat.')->group(function(){
            Route::get('create'  , [\App\Http\Controllers\ContratController::class , 'create'])->name('create');
            Route::get('create-dump'  , [\App\Http\Controllers\ContratController::class , 'create_dump'])->name('create.dump');
            Route::post('store'  , [\App\Http\Controllers\ContratController::class , 'store'])->name('store');
            Route::get('all'     , [\App\Http\Controllers\ContratController::class , 'all'])->name('all');
            Route::get('allplus' , [\App\Http\Controllers\ContratController::class , 'all_plus'])->name('allplus');
            Route::get('signature/{contrat}' , [\App\Http\Controllers\ContratController::class , 'signature'])->name('signature');
            Route::get('signatureplus/{contrat}' , [\App\Http\Controllers\ContratController::class , 'signatureplus'])->name('signatureplus');
        });
    });
});

// Embed
Route::prefix('export/')->name('export.')->group(function(){
    Route::prefix('cspe/')->name('cspe.')->group(function(){
        Route::get('document2/{contrat}' , [\App\Http\Controllers\ContratController::class , 'iframe'])->name('document');
        // Route::get('signatureplus' , [\App\Http\Controllers\ContratController::class , 'signatureplus'])->name('signatureplus');
    });
    Route::prefix('cspeplus/')->name('cspeplus.')->group(function(){
        Route::get('document2/{contrat}' , [\App\Http\Controllers\ContratController::class , 'iframeCspePlus'])->name('document');
    });
});

Route::get('/contracts', [\App\Http\Controllers\ContratController::class , 'all'])->name('contracts');
Route::get('/contractsplus', [\App\Http\Controllers\ContratController::class , 'all_plus'])->name('contracts_plus');
// Signature Page
Route::get('/signer/{contrat}', [\App\Http\Controllers\ContratController::class , 'signer'])->name('signer');
Route::get('/signature/{contrat}', [\App\Http\Controllers\ContratController::class , 'signature'])->name('signature');
Route::get('/signatureplus/{contrat}', [\App\Http\Controllers\ContratController::class , 'signatureplus'])->name('signatureplus');

// Client
Route::prefix('client/')->name('client.')->group(function(){
    Route::prefix('contrat/')->name('contrat.')->group(function(){
        Route::get('signature/cspe/{contrat}' , [\App\Http\Controllers\ContratController::class , 'signatureCspe'])->name('signature.cspe');
        Route::get('signature/cspeplus/{contrat}' , [\App\Http\Controllers\ContratController::class , 'signatureCspePlus'])->name('signature.cspeplus');
    });
});

// Export PDF
Route::get('/cspe/{contrat}/{doc}', [\App\Http\Controllers\PDFController::class , 'cspe'])->name('cspe');
Route::get('/cspeplus/{contrat}/{doc}', [\App\Http\Controllers\PDFController::class , 'cspeplus'])->name('cspeplus');

// Export Bulletin De Souscription
Route::view('/export/bulletin-souscription' , 'pages.export.bulletin-de-souscription.index');
Route::post('/export/bulletin-souscription' , \App\Http\Controllers\ExportBulletinSouscription::class);

// Auth
require __DIR__.'/auth.php';

