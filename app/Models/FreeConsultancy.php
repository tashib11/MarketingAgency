<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeConsultancy extends Model
{
    use HasFactory;

    protected $table = 'free_consultancy';

    protected $fillable = [
        'name', 'email', 'contact', 'description', 'status'
    ];
}
