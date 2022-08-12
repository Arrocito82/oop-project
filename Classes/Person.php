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

// 5: Constructor and Destructors
class Employee{
    private $firstname="Andrea";
    private $lastname="Monterrosa";
    private $email="example@example.com";
    private $age="23";

    // This is a constructor class
    public function __construct($firstname,$lastname,$email,$age)
    {
        // use an arrow -> instead of dot .
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->age=$age;
    }

    public function __destruct()
    {
        echo "Object deleted!";
    }
    private function get_fullname()
    {
        $fullname= $this->firstname ." ".$this->lastname;
        return $fullname;
    }

    public function get_info()
    {
        return "I'm ".$this->get_fullname()." and I'm ".$this->age." years old.";
    }

    public function get_email()
    {
        return $this->email;
    }
    public function set_email($email)
    {
        $this->email=$email;
    }
}

