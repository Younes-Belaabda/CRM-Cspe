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
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/documents', function () {
        return view('pages.agent.documents');
    })->name('documents');

    Route::get('/new-contract', [\App\Http\Controllers\ContratController::class , 'new'])->name('new-contract');
    Route::post('/new-contract', [\App\Http\Controllers\ContratController::class , 'store'])->name('store-contract');
    Route::get('/contracts', [\App\Http\Controllers\ContratController::class , 'all'])->name('contracts');
    Route::get('/contractsplus', [\App\Http\Controllers\ContratController::class , 'all_plus'])->name('contracts_plus');
    // Signature Page
    Route::get('/signature/{contrat}', [\App\Http\Controllers\ContratController::class , 'signature'])->name('signature');


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

