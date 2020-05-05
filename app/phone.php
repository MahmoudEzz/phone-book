<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $guarded = [];
    
    //model relation
    public function user(){
        return $this->belongsTo(User::class);
    }
}
