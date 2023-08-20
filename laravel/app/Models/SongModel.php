<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongModel extends Model
{
    protected $table = 'songs';

    // ...
    protected $fillable = ['titulo', 'artist', 'album', 'created_at', 'duration', 'image_path'];

    // ...
}




