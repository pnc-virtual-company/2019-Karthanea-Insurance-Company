<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function calls(){
        return $this->hasMany(Call::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
}
