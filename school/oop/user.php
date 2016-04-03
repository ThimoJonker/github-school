<?php

/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 27-3-2016
 * Time: 15:46
 */
class User{

    public $name;
    public $email;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function getType(){
        return $this->type;
    }
}

class Admin extends User{

    public $permissionLevel;
    public $type = 'Admin';

    public function __construct($name, $email, $permissionLevel){
        parent::__construct($name, $email); //Neemt deze parameters over van User
        $this->permissionLevel = $permissionLevel;
    }

}

class Member extends User{

    public $dateAdded;
    public $type = 'Member';

    public function __construct($name, $email, $dateAdded){
        parent::__construct($name, $email); //Neemt deze parameters over van User
        $this->dateAdded = $dateAdded;
    }

    public function getEverythingFromMember(){
        return $this->name . $this->email . $this->type . $this->dateAdded;
    }

}