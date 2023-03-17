<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventory',
        'enclosure_id',
        'closure_now',
        'collection',
        'title',
        'author_id',
        'technique',
        'measures',
        'type',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function enclosure()
    {
        return $this->belongsTo(Enclosure::class);
    }
}
