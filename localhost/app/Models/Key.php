<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    use HasFactory;

    protected $fillable=[
      'key' , 'product_id'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

}