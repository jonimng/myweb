<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Emails extends Model
{
    protected $fillable = [
        'email_id',
        'email_receiver',
        'email_sender',
        'subject',
        'pdf_attachments',
        'saved_files',
        'timestamp',

    ];
}
