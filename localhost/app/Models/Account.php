<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;


    protected $fillable = [
        'id' , 'email' , 'balance', 'platformId',
        'productId','email_password',
        'platform_password', 'created_at', 'updated_at'
        ];


    public function order(){
        return $this->hasOne(Order::class);
    }

    public function product(){
        return $this->belongsTo(Product::class, 'productId');
    }


}
