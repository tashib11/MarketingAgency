<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SEOBooking extends Model
{
    use HasFactory;
    protected $table = 'seo_booking';

    protected $fillable = [
        'name', 'email', 'contact', 'technology',
        'website_link', 'status'
    ];
}
