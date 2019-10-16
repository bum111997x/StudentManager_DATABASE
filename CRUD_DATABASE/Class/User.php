<?php


class User
{
    public $name;
    public $phone;
    public $id;
    public $address;
    public $image;

    public function __construct($name,$phone,$address,$image)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->image = $image;
    }
}