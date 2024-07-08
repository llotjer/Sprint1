<?php

$numInicial = 2;
$numFinal = 20;
$natNums = range($numInicial, $numFinal); //creates an array with the interval of numbers from $numInicial to $numFinal.

function isPrime(array $natNums, int $numFinal): array {
    
    for ($i = 0; $i < count($natNums); $i++) { //acts on each of the values ​​in the range between numInitial (2) and numFinal (20).
      
        //we'll start by isolating the first value of the natNums array into a variable we'll call nat, 
        //to see if it meets the necessary conditions to continue the iteration and add it to the primeNumbers array.
       
        if(isset($natNums[$i])){ //if position i of the natNums array exists,
            $nat = $natNums[$i]; //nat is equal to position i of the natNums array.
        } else {
            continue;            //otherwise, loop iteration will continue to the next value in the natNums array.
        }
        
        if(pow($nat,2) > $numFinal) { //if the square of the value of nat is greater than numFinal, the for loop iteration stops.
            break;
        }

        //We'll keep looking for multiples of the nat value and delete them from the natNums array.
        for ($j = pow($nat,2); $j <= $numFinal; $j += $nat) {  //for j equal to the square of the value of nat (to not delete the nat number from the array), 
                                                               //finds if the value of j exists in the natNums array, and if it does, deletes it.
                                                               //When the iteration ends, j will be equal to j + nat.
           
            if(in_array($j, $natNums)) {                       //looks for whether the value of j exists in the natNums array.
               $pos = array_search($j, $natNums);              //looks for the position of the value of j in the natNums array.
               unset($natNums[$pos]);                          //clears the position and value of j from the natNums array.
            }                                                  //I do this in case at some point, the value to delete does not exist
                                                               //for having cleared it earlier at another point in the iteration.
        }
    }
   
    return $natNums;
}

echo "<pre>";
print_r(isPrime($natNums, $numFinal));
echo "</pre>";