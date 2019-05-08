<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientlist extends Model
{
    protected $table='clients';
    protected $primarykey='id';
    protected $fillable=[
        'firstname',
        'lastname',
        'address',
        'phonenumber',
        'email',
        'state'
    ];
    public function calls(){
        return $this->hasMany(Call::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
}
