<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{

    protected $fillable = [
<<<<<<< HEAD
        'id','status', 'startdate','monthlybill','id_client','id_contracttype'
=======
        'id','status', 'startdate', 'enddate','monthlybill','client_id','contracttype_id'
>>>>>>> 57a01573f4ca6782a09e1522a421911b3eb0ae02
    ];
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
    public function bill(){ 
        return $this->hasOne(Bill::class);
    }
    public function contracttype(){
        return $this->belongsTo(Contracttype::class,'contracttype_id');
    }
}

