<?php
namespace Pet;
// debido a que el archivo esta en otra carpeta es necesario usar absolute path
$path = $_SERVER['DOCUMENT_ROOT'];
$path.='/Classes/People/Person.php';
include_once $path;
class Pet extends \Person{
    public function get_owner()
    {
        return parent::owner();
    }
}
