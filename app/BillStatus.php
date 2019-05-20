<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillStatus extends Model
{
    protected $fillable = [
        'id','status'
    ];
}
