<?php

use Person as GlobalPerson;

    class Person{

        public $name;
        public $age;

        function __construct($personName,$personAge=0)
        {
            $this->name=$personName;
            $this->age=$personAge;
        }


        function getInfo(){

            if($this->age){

                echo "My name is  {$this->name} and age is {$this->age}\n";

            }else{

                echo "Name is {$this->name} but Age is hidden\n";

            }
           
            
        } 


    }

    $person1=new Person("Mehfuz",25);
    $person2=new Person("Soikat",26);
    $person3=new Person("Rahim");
    $person1->getInfo();
    $person2->getInfo();
    $person3->getInfo();
