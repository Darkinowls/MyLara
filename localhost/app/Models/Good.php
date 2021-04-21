<?php


namespace App\Models;


class Good
{
    protected $id;
    protected $type = 'Електротранспорт';
    protected $info;
    protected $price;
    protected $img = 'img/4.png';

    function __construct($id)
    {
        $this->price = 50000 + $id*50;
        $this->id = $id;
        if ($id >= 1 && $id <= 19) {
            $this->type = 'Електроскутер';
            $this->info = "Важить $this->type від 110 до 140 кг в залежності від ємності й типу акумуляторних батарей. В базовій
                комплектації на електромотоцикл монтується свинцево-кислотна батарея типу AGM на 72В 20А. Вона
                складається з 6 тягових акумуляторів 6DZM20 (12v 20Ah).";
            $this->img = 'img/1.png';
        } elseif ($id >= 20 && $id <= 29) {
            $this->type = 'Електротрицикл';
            $this->info = "Кількість циклів заряду-розряду свинцево-кислотних акумуляторів
                500. Корпус акумуляторів повністю водонепроникний виконаний з литого пластику.";
            $this->img = 'img/2.png';
        } elseif ($id >= 30 && $id <= 49) {
            $this->type = 'Електромотоцикл';
            $this->info = "Всередині міститься вся
                електронна система управління зарядки. Спортбайк заряджається за допомогою зарядного пристрою від
                звичайної побутової розетки.";
            $this->img = 'img/3.png';
        }
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
