<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{

    protected $fillable = [
        'id','status', 'startdate', 'enddate','monthlybill','editby','id_client','id_contracttype'
    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function bill(){
        return $this->belongsTo(Bill::class);
    }
    public function contracttypes(){
        return $this->hasMany(contract::class);
    }
}
