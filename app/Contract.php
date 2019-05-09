<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{

    protected $fillable = [

        'id','status', 'startdate', 'enddate','monthlyduedate','monthlybill','client_id','contracttype_id','bill_id'

        'id','status', 'startdate','monthlybill','id_client','id_contracttype'
        'id','status', 'startdate', 'enddate','monthlybill','client_id','contracttype_id'
        'id','status', 'startdate', 'enddate','monthlybill','monthlyduedate','client_id','contracttype_id'

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
}

