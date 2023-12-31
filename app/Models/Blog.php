<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image_id',
        'category_id'
    ];

    public function image(){
        return $this->belongsTo(Image::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
