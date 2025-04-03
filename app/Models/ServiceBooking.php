<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBooking extends Model
{
    use HasFactory;

    protected $table = 'service_booking';

    protected $fillable = [
        'name', 'email', 'contact', 'company',
        'service_type', 'example_website', 'description', 'status'
    ];
}
