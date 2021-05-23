<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'id', 'slug', 'price', 'title', 'description', 'photo', 'platform_id',
        'date', 'created_at', 'updated_at'
    ];


    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function keys()
    {
        return $this->hasMany(Key::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

}
