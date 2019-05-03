<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table='clients';
    protected $primarykey='id';
    protected $fillable=[
        'firstname',
        'lastname',
        'address',
        'phonenumber',

        'email'
    ];

    
    public function calls(){
        return $this->hasMany(Call::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
}
