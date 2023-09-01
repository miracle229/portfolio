<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad_testimonial extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'auteur',
        'poste',
        'commentaires',
        'image'
    ];
}
