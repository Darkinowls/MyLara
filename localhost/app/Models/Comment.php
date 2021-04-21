<?php


namespace App\Models;


class Comment
{

    protected $text;
    protected $name;
    protected $date;

    function __construct($text, $name)
    {
        $this->name = $name;
        $this->text = $text;
        $this->date = strftime('%e %B %Y');
    }

    public function getText()
    {
        return $this->text;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDate()
    {
        return $this->date;
    }


}
