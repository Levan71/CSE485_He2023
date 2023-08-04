<?php
class Employe{
    private $id;
    private $name;
    private $address;
    private $salary;

    public function __construct($id, $name, $address, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->salary = $salary;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getAddress(){
        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;
    }

    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
}