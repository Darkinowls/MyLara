<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use HasFactory;
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function keys()
    {
        return $this->hasMany(Key::class);
    }

    public function account()
    {
        return $this->hasMany(Account::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
