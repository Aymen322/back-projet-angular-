<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryHotel extends Model
{
    protected $fillable = ['name', 'starnumber'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
