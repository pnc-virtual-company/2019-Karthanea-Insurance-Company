<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    protected $fillable = [
        'id','contracttype'
    ];
    public function conatract(){
        return $this->belongsTo(contract::class);
    }
}
