<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contracttype extends Model
{
    protected $fillable = [
        'id','contracttype'
    ];
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
}
