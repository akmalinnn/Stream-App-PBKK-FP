<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ['favorites_id', 'user_id', 'content_id', 'type', 'title', 'overview', 'release_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
