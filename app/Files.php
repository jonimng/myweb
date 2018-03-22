<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Files extends Model
{
    protected $fillable = [
        'file_id',
        'original_name',
        'user_id',
        'company_name',
        'timestamp',
        'size',
        'processed',
        'deleted',

    ];
    public function invoice()
    {
        return $this->belongsTo('App\Invoices');
    }
    public function users()
    {
        return $this->hasOne('App\Users');
    }
}
