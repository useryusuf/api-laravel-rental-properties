<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'price', "space", "deposite", "ready_date", "rooms", 'city_id', 'address', 'images', 'is_active', 'category_id', 'user_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }



    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function lessor()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
