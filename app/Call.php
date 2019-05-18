<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
        'id','date', 'callOperator','duration','comments','client_id'
    ];
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
}
