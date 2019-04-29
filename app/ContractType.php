<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    public function conatract(){
        return $this->belongsTo(contract::class);
    }
}
