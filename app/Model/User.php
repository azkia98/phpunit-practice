<?php

namespace App\Model;

class User {
    private $name;
    private $familyName;

    public function setName($name)
    {
        $this->name=$name;
    }
    
    public function getName()
    {
        return $name;
    }

    public function setFamilyName($FamilyName)
    {
        $this->familyName=$FamilyName;
    }
    
    public function getFamilyName()
    {
        return $this->familyName;
    }
}