<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ApiTrait;

class Author extends Model
{
    use HasFactory, ApiTrait;

    protected $fillable = [
        'first_name',
        'second_name',
        'last_name',
        'second_last_name',
        'birthday',
        'place_birth',
        'date_death',
        'place_death',
        'biography',
    ];

    protected  $allowFilter = ['first_name', 'last_name'];

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
}
