<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function contract(){
        return $this->hasOne(Contract::class);
    }
}
