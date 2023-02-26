<?php
    
    class Person{

        public $firstName;
        public $lastName;

       
        public function sayHi(){
            echo "Salam\n";
            $this->FullName();
        }

        public function FullName(){
            
            echo "Fullname is {$this->firstName} {$this->lastName}";
        }
    }

    $newPerson=new Person("soi");
    // $newPerson->firstName="Mehfuz";
    // $newPerson->lastName="Ahmed";
    // $newPerson->FullName();
    $newPerson->sayHi();
   

    
    