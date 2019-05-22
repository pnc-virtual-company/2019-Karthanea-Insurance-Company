<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{

    protected $fillable = [
        'id','startdate', 'enddate','monthlyduedate','monthlybill','client_id','contracttype_id','status_id'
    ];
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
    
    public function contracttype(){
        return $this->belongsTo(Contracttype::class,'contracttype_id');
    }
    public function contractStatus(){
        return $this->belongsTo(Contractstatus::class,'status_id');
    }
    public function bill(){
        return $this->hasMany(Bill::class);
    }

}

