<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'id','firstname', 'lastname', 'addresss','phonenumber','email'
    ];
    public function calls(){
        return $this->hasMany(Call::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
}
