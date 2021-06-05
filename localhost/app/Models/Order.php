<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [

        'id', 'userId', 'keyId', 'accountId', 'price', 'created_at', 'updated_at'

    ];


    public function key()
    {
        return $this->belongsTo(Key::class, 'keyId');
    }

    public function account()
    {
        return $this->belongsTo(Account::class, 'accountId');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
