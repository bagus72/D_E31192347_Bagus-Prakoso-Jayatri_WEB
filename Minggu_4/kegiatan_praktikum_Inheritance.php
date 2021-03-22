<?php
#the parent class
class Car {
    #private property inside the class
    private $model;

    #public setter method
    public function setModel($model){
        $this -> model = $model;
    }

    public function hello(){
        return "beep! I am  <i>" . $this -> model . "</i><br/>";
    }
}

#the child class inherits the code from the parent class
class SportCar extends Car {
    #no code in the child class
}

#create an instance from the child class
$sportCar1 = new SportCar();

#set the value of the class' property
#for this aim, we use a method that we created in the parent
$sportCar1 -> setModel('Mercedes Benz');

#use another method that the child class inherited from the parent class
echo $sportCar1 -> hello();
?>