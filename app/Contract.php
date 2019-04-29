<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function bill(){
        return $this->belongsTo(Bill::class);
    }
    public function contracttype(){
        return $this->hasMany(contract::class);
    }
}
