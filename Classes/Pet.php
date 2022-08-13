<?php
class Pet extends Person{
    public function get_owner()
    {
        return parent::owner();
    }
}
