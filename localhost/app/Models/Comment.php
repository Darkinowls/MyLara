<?php


namespace App\Models;


class Comment
{

    protected $id;
    protected $text;
    protected $email;
    protected $name;
    protected $date;

    function __construct($text, $name , $email = null)
    {
        $this->name = $name;
        $this->text = $text;
        $this->email = $email;
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
