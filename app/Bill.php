<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'id','month','amount','duedate','billStatus_id','contract_id'
    ];
    public function contracts(){

        return $this->belongsTo(Contract::class,'contract_id');
    }
    public function billStatus(){
        return $this->hasMany(BillStatus::class,'billStatus_id');
    }
}


