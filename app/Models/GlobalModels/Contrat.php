<?php

namespace App\Models\GlobalModels;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Component\Uid\Uuid;

class Contrat extends Model
{
    use HasFactory;

    public $fillable = [
            'genre',
            'nom',
            'rum',
            'prenom',
            'adresse',
            'date',
            'zipcode',
            'ville',
            'pays',
            'mobile',
            'telephone',
            'mail',
            'iban',
            'bic',
            'status',
            'user_id',
            'is_mail_opened'
    ];

    protected $casts = ['date'=>'datetime'];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function getRouteKeyName()
    {
        return 'uid';
    }
}
