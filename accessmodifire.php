<?php

    class Fund{

        private $fund;//private function we cannot access outside function

        function __construct($initial=0)
        {
            $this->fund=$initial;
        }
         
        function addFund($money){

            $this->fund=$this->fund+$money;
        }
        function SubFund($money){

            $this->fund=$this->fund-$money;
        }
        function totalFund(){
           echo "Total fund Deposit {$this->fund} \n";
        }
    }

    $fund=new Fund(100);
    // $fund->fund=200;
    $fund->totalFund();
    $fund->addFund(10);
    $fund->totalFund();
    $fund->SubFund(5);
    $fund->totalFund();
    