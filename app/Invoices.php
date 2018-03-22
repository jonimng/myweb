<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Invoices extends Model
{
    protected $fillable = [
        'user_id',
        'file_id',
        'company',
        'sum',
        'currency',
        'payed',
        'date',
        'date_start',
        'due_date',
        'date_end',        
        'timestamp',

    ];

    public function user()
    {
                return $this->belongsTo('App\users');
    }
    
    public function files(){
        return $this->hasOne('AppFiles');

    }
}
