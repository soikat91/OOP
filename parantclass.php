<?php

// class ParentClass{

//     function sayHi(){
//         echo "Hi soikat";
//     }
// }

// class ChildClass extends ParentClass{
//     function sayHi(){
//         parent::sayHi();
//         echo "Hello Mehfuz";
//     }
// }


// $childObject=new ChildClass;
// $childObject->sayHi();


class ParentClass{

     public $name;

     function __construct($name){
        
        $this->name=$name;
        $this->sayHi();
     }
    function sayHi(){
        echo "Hi Dear {$this->name} I am fine";
    }
}

class ChildClass extends ParentClass{

    function sayHi(){
        
        echo "Hello, {$this->name} How are you?\n";
         parent::sayHi();
    }
}

$newobject=new ChildClass("Soikat");

