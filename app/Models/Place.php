<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function property()
    {
        return $this->belongsTo(Property::class, 'id', 'place_id');
        # code...
    }
}
