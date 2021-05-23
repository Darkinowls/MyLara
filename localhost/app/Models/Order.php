<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [

        'id', 'user_id', 'key', 'account_id', 'price', 'created_at', 'updated_at'

    ];

    protected $hidden = [

    ];


    public function key()
    {
        return $this->belongsTo(Key::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
