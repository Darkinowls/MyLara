<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Good
{
    protected $id;
    protected $type = 'Електротранспорт';
    protected $name;
    protected $info;
    protected $price;
    protected $img;

    function __construct($id)
    {
        $good = DB::table('good')->find($id);
        $this->id = $id;
        $this->price = $good->price;
        $this->type = $good->type;
        $this->info = $good->info;
        $this->img = "img/$id.png";

        if ('Електротранспорт' == $this->type) $this->name = 'Електротранспорт ЕT';
        elseif ('Електроскутер' == $this->type) $this->name = 'Електроскутер ЕS';
        elseif ('Електромотоцикл' == $this->type) $this->name = 'Електромотоцикл ЕM';
        elseif ('Електротрицикл' == $this->type) $this->name = 'Електротрицикл ЕТR';

    }

    public static function find($id)
    {
        return new Good($id);
    }

    public static function all()
    {
        return DB::table('good')->get();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getInfo()
    {
        return $this->info;
    }

}
