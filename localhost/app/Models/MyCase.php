<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCase extends Model
{
    use HasFactory;

    protected $fillable=[
        'id', 'title'  , 'price','created_at','updated_at'
    ];

    protected $table = 'cases';

    public function products(){
        return $this->hasMany(Product::class, 'caseId');
    }
}
