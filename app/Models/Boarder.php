<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boarder extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function appliances(){
        return $this->belongsToMany('App\Models\Appliance', 'boarder-appliances');
    }
    public function room(){
        return $this->belongsTo('App\Models\Room');
    }
    public function logs(){
        return $this->hasMany('App\Models\Log');
    }
    public function payments(){
        return $this->hasMany('App\Models\Payment');
    }
}
