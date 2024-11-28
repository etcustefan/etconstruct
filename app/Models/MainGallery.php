<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainGallery extends Model
{
    public $fillable = [
        'image_path',
        'video_path',
        'heading_text',
        'text',
        'button_text',
        'button_action'
    ];
}
