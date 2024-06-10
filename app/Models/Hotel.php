<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'address',
      'website',
      'description',
      'email',
        'place_id'
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }


}
