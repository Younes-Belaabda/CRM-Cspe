<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Component\Uid\Uuid;


class ContratPlus extends Model
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

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->rum =  IdGenerator::generate(['table' => 'contrat_pluses', 'field' => 'rum' , 'length' => 16, 'prefix' => 'cspeplus°']);
            $model->uid = Uuid::v1();
        });
    }

    public function getRouteKeyName()
    {
        return 'uid';
    }
}
