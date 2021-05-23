<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable =[
       'id' , 'user_id', 'product_id' , 'text' , 'review_id' , 'created_at', 'updated_at'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function review(){
        return $this->belongsTo(Review::class);
    }

}
