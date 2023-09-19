<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function () {
    // Homepage
    Route::get('/', function () {
        return view('welcome');
    });

    // Agent
    Route::prefix('agent/')->name('agent.')->group(function(){
        Route::prefix('contrat/')->name('contrat.')->group(function(){
            Route::get('create'  , [\App\Http\Controllers\ContratController::class , 'create'])->name('create');
            Route::post('store'  , [\App\Http\Controllers\ContratController::class , 'store'])->name('store');
            Route::get('all'     , [\App\Http\Controllers\ContratController::class , 'all'])->name('all');
            Route::get('allplus' , [\App\Http\Controllers\ContratController::class , 'all_plus'])->name('allplus');
            Route::get('signature/{contrat}' , [\App\Http\Controllers\ContratController::class , 'signature'])->name('signature');
            Route::get('signatureplus/{contrat}' , [\App\Http\Controllers\ContratController::class , 'signatureplus'])->name('signatureplus');
        });
    });

    // Client
    Route::prefix('client/')->name('client.')->group(function(){
        Route::prefix('contrat/')->name('contrat.')->group(function(){
            Route::get('signature/cspe/{contrat}' , [\App\Http\Controllers\ContratController::class , 'signatureCspe'])->name('signature.cspe');
            Route::get('signature/cspeplus/{contrat}' , [\App\Http\Controllers\ContratController::class , 'signatureCspePlus'])->name('signature.cspeplus');
        });
    });

    // Export
    Route::prefix('export/')->name('export.')->group(function(){
        Route::prefix('cspe/')->name('cspe.')->group(function(){
            Route::get('document2/{contrat}' , [\App\Http\Controllers\ContratController::class , 'iframe'])->name('document');
            // Route::get('signatureplus' , [\App\Http\Controllers\ContratController::class , 'signatureplus'])->name('signatureplus');
        });
        Route::prefix('cspeplus/')->name('cspeplus.')->group(function(){
            Route::get('document2/{contrat}' , [\App\Http\Controllers\ContratController::class , 'iframeCspePlus'])->name('document');
            // Route::get('signatureplus' , [\App\Http\Controllers\ContratController::class , 'signatureplus'])->name('signatureplus');
        });
    });

    // Route::get('/new-contract', [\App\Http\Controllers\ContratController::class , 'new'])->name('new-contract');
    Route::post('/new-contract', [\App\Http\Controllers\ContratController::class , 'store'])->name('store-contract');
    Route::get('/contracts', [\App\Http\Controllers\ContratController::class , 'all'])->name('contracts');
    Route::get('/contractsplus', [\App\Http\Controllers\ContratController::class , 'all_plus'])->name('contracts_plus');
    // Signature Page
    Route::get('/signature/{contrat}', [\App\Http\Controllers\ContratController::class , 'signature'])->name('signature');
    Route::get('/signatureplus/{contrat}', [\App\Http\Controllers\ContratController::class , 'signatureplus'])->name('signatureplus');


    Route::get('/documents', function () {
        return view('pages.agent.contract.documents');
    })->name('documents');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cspe/{contrat}/{doc}', [\App\Http\Controllers\PDFController::class , 'cspe'])->name('cspe');
Route::get('/cspeplus/{contrat}/{doc}', [\App\Http\Controllers\PDFController::class , 'cspeplus'])->name('cspeplus');



require __DIR__.'/auth.php';

