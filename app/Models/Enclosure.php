<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enclosure extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'street_number',
        'colony',
        'zipcode',
        'city',
        'state',
        'director',
    ];

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
}
