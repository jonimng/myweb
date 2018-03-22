<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Temps extends Model
{
    protected $fillable = [
        'file_id',
        'response',        
        'created_at',

    ];
}
