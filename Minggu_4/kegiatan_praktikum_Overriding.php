<?php
#the parent class has hello method that returns "beep"

class Car {
    final public function hello(){
        return "beep";
    }
}

#the child class has hello method that tries to override the hello method in the parent
class SportCar extends Car {
    public function hello(){
        return "hallo";
    }
}

#create a new object
$sportCar1 = new SportCar('Mercedes Benz');

#get the result of the hello method
echo $sportCar1->hello();
?>