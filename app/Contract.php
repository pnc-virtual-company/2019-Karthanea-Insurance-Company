<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{

    protected $fillable = [
        'id','status', 'startdate','monthlybill','id_client','id_contracttype'
    ];
    public function client(){
        return $this->belongsTo(Client::class,'id_client');
    }
    public function bill(){ 
        return $this->hasOne(Bill::class);
    }
    public function contracttype(){
        return $this->belongsTo(Contracttype::class,'id_contracttype');
    }
}

