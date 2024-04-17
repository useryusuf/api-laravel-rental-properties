<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User  extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['firstname', 'lastname', 'password', 'email', 'phone'];

    protected $appends = ['rating_score'];

    public function getRatingScoreAttribute()
    {
        if ($this->reviews_count > 0) {
            $totalRating = $this->reviews->sum('rating');
            $maxRating = $this->reviews_count * 5;

            return ($totalRating / $maxRating) * 5;
        }

        return 0;
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
