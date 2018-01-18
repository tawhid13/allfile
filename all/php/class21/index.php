<?php 
class Person{
    public $first_name;
    public $last_name;
    public function fullName () {
        return $this->first_name.''.$this->last_name;
    }s
    public static $city='feni';
    const DIVITION ='chittangong';
}
$sakib= new Person;
$sakib->first_name='ikbal';
$sakib->last_name='tawhid';
?>
echo Person::DIVITION;
echo $sakib->fullName();