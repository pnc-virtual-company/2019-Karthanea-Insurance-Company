<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'id','status', 'startdate', 'monthlybill','id_contract'
    ];
    public function contract(){
        return $this->hasOne(Contract::class);
    }
}
