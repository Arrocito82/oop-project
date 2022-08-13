<?php 
// 5: Constructor and Destructors
class Employee{
    private $firstname="Andrea";
    private $lastname="Monterrosa";
    private $email="example@example.com";
    private $age="23";
    public static $drinkingAge=18;
    private static $ageOfLegalMajority=21;

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
    public static function getAgeOfLegalMajority()
    {
        // use self:: intead of $this-> keyword when static
        return self::$ageOfLegalMajority;
    }
    public static function setAgeOfLegalMajority($age)
    {
        return self::$ageOfLegalMajority=$age;
    }

}

