<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'id', 'slug', 'price', 'title', 'description', 'photo', 'platformId', 'caseId',
        'date', 'created_at', 'updated_at'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class, 'platformId');
    }
    public function accounts()
    {
        return $this->hasMany(Account::class );
    }
    public function case()
    {
        return $this->belongsTo(MyCase::class,'caseId' );
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
