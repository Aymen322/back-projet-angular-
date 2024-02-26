<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'description', 'image', 'contact_email', 'city', 'contact_phone', 'promotion'];
}
