<?php
namespace Pet;
include_once 'Person.php';
class Pet extends \Person{
    public function get_owner()
    {
        return parent::owner();
    }
}
