<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'publication_year',
        'genre',
        'description',
        'img_url',
    ];
protected $casts = [
    'genre' => 'array',
];
public function reservations()
{
    return $this->hasMany(Reservation::class);
}

}
