<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model
{
    use HasFactory;
    protected $fillable = ['blog_id', 'text_section', 'image_url'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
