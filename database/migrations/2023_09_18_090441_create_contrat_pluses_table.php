<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contrat_pluses', function (Blueprint $table) {
            $table->id();
            $table->enum('genre' , ['M' , 'Mme']);
            $table->string('rum'); //c°0001167
            $table->uuid('uid'); //c°0001167
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->date('date');
            $table->string('zipcode');
            $table->string('ville');
            $table->string('pays');
            $table->string('mobile');
            $table->string('telephone')->nullable();
            $table->string('mail');
            $table->string('iban')->unique();
            $table->string('bic');
            $table->enum('status' , ['En attente client' , 'En attente Back-Office' , 'Validé call' , 'Rétracté' , 'Injoignable' , 'Impayé' , 'Non conforme']);
            $table->boolean('is_mail_opened')->default(false);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrat_pluses');
    }
};
