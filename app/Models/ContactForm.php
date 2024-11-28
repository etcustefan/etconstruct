<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    public const MAX_SUBMITTED_FORMS_COUNT = 5;
    public $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
