<?php
class Department {
    public $id;
    public $name;
    public $address;
    public $phone;
    public $email;
    public $website;
    public $head_of_department;

    function __construct($_id, $_name, $_address, $_phone, $_email, $_website, $_head_of_department)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->address = $_address;
        $this->phone = $_phone;
        $this->email = $_email;
        $this->website = $_website;
        $this->head_of_department = $_head_of_department;
        
    }

    public function printInfo() {
        echo 
        '<h1>' . $this->id . ' | ', $this->name . '</h1>' .
        '<ul>' . 
            '<li>' . $this-> address . '</li>' .
            '<li>' . $this-> phone . '</li>' .
            '<li>' . $this-> email . '</li>' .
            '<li>' . $this-> website . '</li>' .
            '<li>' . $this-> head_of_department . '</li>';
    }
}