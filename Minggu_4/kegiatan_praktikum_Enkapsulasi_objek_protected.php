<?php
#PROTECTED
class Car {
    #the $model property is protected, so it can be accessed
    #from within the class and its child classes
    protected $model;

    #public setter method
    public function setModel($model){
        $this->model=$model;
    }
}
#the child class
class SportsCar extends Car{
    public function hello(){
        return "beep! I am a <i>" . $this->model . "</i><br/>";
    }
}
#create an instance from the child class
$sportscar1 = new SportsCar();
?>