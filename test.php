<?php

class Human{

    function __construct()
    {
        echo "hello World \n";        
    }

    function sayHi(){
        echo "salam\n";
    }
}

class Cat{
    function sayHi(){
        echo "Mew\n";
    }
}

class Dog{
    function sayHi(){
        echo "Ghew\n";
    }
}

$human=new Human;
$cat=new Cat;
$dog=new Dog;

$human->sayHi();
$cat->sayHi();