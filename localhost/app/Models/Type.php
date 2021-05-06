<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    public function goods()
    {
        return $this->belongsToMany(Good::class);
    }

}
