<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class User extends Model
{
   

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'mobile',
        'role',
        'otp',
    ];

    protected  $attributes  = [
        'otp' => '0'
    ];

    public function isAdmin(): bool
    {
        return $this->role === 1;
    }
    public function isAuthor(): bool
    {
        return $this->role === 2;
    }
    public function blog(){
        return $this->hasMany(Blog::class);
    }
    public function news(){
        return $this->hasMany(News::class);
    }

  
}