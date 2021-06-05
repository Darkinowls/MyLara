<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    use HasFactory;

    protected $fillable=[
        'id', 'code' , 'productId' , 'created_at', 'updated_at'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'productId');
    }

    public function order(){
        return $this->hasOne(Order::class);
    }


}
