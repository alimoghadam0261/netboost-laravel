<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email','phone','verification_code','verification_code_sent_at','role'];


    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function wishlist()
    {
        return $this->belongsToMany(Product::class, 'wishlist')->withTimestamps();
    }

}
