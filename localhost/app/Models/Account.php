<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;


    protected $fillable = [
        'id', 'name' , 'email' , 'balance', 'platform_id',
        'product_id','email_password',
        'platform_password', 'created_at', 'updated_at'
        ];

    protected $hidden=[

    ];


    public function product(){
        return $this->hasOne(Product::class);
    }


}
