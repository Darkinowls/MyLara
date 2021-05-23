<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function key(){
        return $this->hasOne(Key::class);
    }

    public function account(){
        return  $this->hasOne(Account::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
