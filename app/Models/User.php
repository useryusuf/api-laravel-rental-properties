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

    protected $fillable = ['first_name', 'last_name', 'password', 'email', 'phone'];

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
}
