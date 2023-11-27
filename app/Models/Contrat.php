<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Component\Uid\Uuid;

class Contrat extends \App\Models\GlobalModels\Contrat
{

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->rum =  IdGenerator::generate(['table' => 'contrats', 'field' => 'rum' , 'length' => 12, 'prefix' => 'cspe°']);
            $model->uid = Uuid::v1();
        });
    }

}
