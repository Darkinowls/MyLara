<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;


    protected $fillable = [
        'id', 'name' , 'email' , 'balance', 'steam_id',
        'product_id', 'created_at', 'updated_at'
        ];

    protected $hidden=[
        'password'
    ];


    public function product(){
        return $this->hasOne(Product::class);
    }


}
