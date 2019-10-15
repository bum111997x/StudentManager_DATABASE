<?php


class User
{
    public $name;
    public $phone;
    public $id;
    public $address;

    public function __construct($name,$phone,$address)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }
}