<?php
#################################################################
# Day 4 
#
# https://www.hackerrank.com/challenges/30-class-vs-instance
#################################################################
class Person{
    public $age;
    public function __construct($initialAge)
    {
        // Add some more code to run some checks on initialAge
        $this->age = $initialAge;
        if ($initialAge < 0)
        {
            $this->age = 0;
            printf("Age is not valid, setting age to 0.\n");
        }

    }
    public  function amIOld()
    {
        // Do some computations in here and print out the correct statement to the console 
        if ($this->age < 13) {printf("You are young.\n"); return;}
        if ($this->age >= 13 && $this->age < 18) {printf("You are a teenager.\n"); return;}
        
        printf("You are old.\n"); 
        return;
    }
    public  function yearPasses()
    {
        // Increment the age of the person in here
        $this->age += 1;
    }   
}


$T = intval(fgets(STDIN));
 for($i=0;$i<$T;$i++)
 {
     $age=intval(fgets(STDIN));
     $p=new Person($age);
     $p->amIOld();
     for($j=0;$j<3;$j++){
         $p->yearPasses();
     }
     $p->amIOld();
     echo "\n";       
 }
?>