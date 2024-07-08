<?php

/*  Divisibility: A number is prime if it is divisible only by 1 and itself. If a number is divisible by any other number, 
    then it is not first.
    
    Rule of 2: Any even number greater than 2 cannot be prime because it is divisible by 2.
   
    Square root test: To test the primality of a number, its only needed to test its divisibility up to the square root 
    of this number. If you find no divisor up to this point, the number is prime.
    
    To check the divisibility of a number up to the square root:
    
    Calculate the square root of the number.
    Check the divisibility of the number by all numbers from 2 to the square root.
    If the number is divisible by any of these numbers (without leaving a remainder), then the number is not prime. 
    If the number is not divisible by any of these numbers, then the number is prime.

    Exceptions: The number 1 is not considered a prime number. The number 2 is the only prime number that is even. 

I decided to check prime numbers through the rule of the square root. */

$intNums = range(2,100); //Created an array with numbers from 2 to 100.


function isPrime(int $num): bool { //this functions will check if the number is prime or not, returning a boolean, using the square root method.
        
    $sqrtNum = sqrt($num);
        
    for($i = 2; $i <= $sqrtNum; $i++){ //Checking if the number is divisible by any number from 2 to the square root of the number.
          if($num % $i == 0){ //If the number is divisible by any number from 2 to the square root of the number, will return false.
              return false;
         }
     }
     return true; //if not, will return true.
}
    


$primeNums = array_reduce($intNums, function (int $acumulated, int $num):int { //Using the array_reduce function to sum all the numbers that are prime.
                                                                               //Here, each num is a number of the array intNums.
    if(isPrime($num)){ //if isPrime function returns true, we will use that number
        $acumulated += $num; //to sum with the acumulated number, starting with 0.
    }
    return $acumulated;
},0); // here is the initial value of the acumulated number.

echo "La suma de tots els números primers especificats és : " . $primeNums . ".";