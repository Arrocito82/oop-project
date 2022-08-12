<?php

// 3: Create Classes 
/*
class Person{
    public $name="Andrea Monterrosa";
}

$object = new Person;
var_dump($object);
*/

// 4: Visibility and Inheritance

class Person{
    private $firstname="Andrea";
    private $lastname="Monterrosa";
    private $email="example@example.com";
    private $age="23";

    protected function owner()
    {
        $a= $this->firstname ." ".$this->lastname;
        return $a;
    }
}

class Pet extends Person{
    public function get_owner()
    {
        return parent::owner();
    }
}
