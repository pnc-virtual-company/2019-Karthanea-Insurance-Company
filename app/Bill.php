<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'id','status', 'startdate', 'monthlybill','contract_id'
    ];
    public function contract(){
        return $this->belongsTo(Contract::class,'contract_id');
    }
}
