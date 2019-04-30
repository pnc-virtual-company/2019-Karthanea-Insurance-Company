<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
        'id','date', 'callOperator','duration','comments','id_client'
    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
   
}
