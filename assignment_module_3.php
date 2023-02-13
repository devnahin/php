
<?php

//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision



function checkEvenOdd($number){
    if($number%2 ==0){
        return "Number is Even";
    } else{
        return "Number is odd";
    }
}

$checkNumber = 5;
echo checkEvenOdd($checkNumber);

echo PHP_EOL;
echo PHP_EOL;

//2. 1+2+3...…….100  Write a loop to calculate the summation of the series

$sum=0;
for($i=1; $i<=100;$i++){
    $sum = $sum + $i; 
}

echo "The Summation of the 1+2+3....+100 is: " .$sum;

echo PHP_EOL;




