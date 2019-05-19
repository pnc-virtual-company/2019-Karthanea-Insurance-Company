<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractstatus extends Model
{
    protected $fillable = [
        'id','status'
    ];
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
}
