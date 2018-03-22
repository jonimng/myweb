<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'company_name',
        'company_type',
        'company_email',
        'subject',
        'file_name',
        'company_logo',
        'created_at',

    ];
}
