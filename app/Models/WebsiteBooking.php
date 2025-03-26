<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteBooking extends Model
{
    use HasFactory;
    protected $table = 'website_booking';

    protected $fillable = [
        'name', 'email', 'contact', 'company',
        'website_type', 'example_website', 'description', 'status'
    ];
}
