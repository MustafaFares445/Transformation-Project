<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
      'hotel_id',
      'type',
      'bed_number',
      'price',
      'name',
      'available',
    ];

    public function hotle()
    {
        return $this->belongsTo(Hotel::class);
    }
}


