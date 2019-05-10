<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{

    protected $fillable = [

        'id', 'startdate', 'enddate','monthlyduedate','monthlybill','client_id','contracttype_id','bill_id','contractstatus_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
    public function bill(){ 
        return $this->belongsTo(Bill::class,'bill_id');
    }
    public function contracttype(){
        return $this->belongsTo(Contracttype::class,'contracttype_id');
    }
    public function contractstatus(){
        return $this->belongsTo(Contractstatus::class,'contractstatus_id');
    }

}

