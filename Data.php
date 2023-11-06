<?php
class Data{
    public int $id;
    public string $name;
    public string $email;
    public string $number;
    public string $gender;
    public string $city;

    function __construct(string $name,string $email,string $number,string $gender,string $city){
        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
        $this->gender = $gender;
        $this->city = $city;
    }
}
?>