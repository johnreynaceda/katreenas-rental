<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function boarder(){
        return $this->belongsTo('App\Models\Boarder');
    }
}
