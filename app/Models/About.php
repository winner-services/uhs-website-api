<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'description',
        'objective',
        'assignment',
        'vision',
        'address',
        'instagram',
        'facebook',
        'twitter',
        'linkedin',
        'youtube',
        'phone',
        'email',
        'experience',
        'image1',
        'image2',
        'bannier_image',
    ];
}
