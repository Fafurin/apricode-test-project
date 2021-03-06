<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameGenres extends Model
{
    use HasFactory;

    protected $table = 'game_genres';

    protected $fillable = [
        'game_id',
        'genre_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
