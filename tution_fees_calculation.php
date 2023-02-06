<?php

$tutionFees = 9000;


//commission 25% for tution fees above 20,000USD 
$commission_25 = $tutionFees * .25; 

//commission 20% for tution fees above 10,000USD below 20,000USD 
$commission_20 = $tutionFees * .20; 

//commission 15% for tution fees above 7,000USD below 10,000USD 
$commission_15 = $tutionFees * .15; 


//ternary operator to calculate this calculation 

print ($tutionFees >= 20000) ? 'Commission 25% = '. $commission_25  : (( $tutionFees >= 10000 && $tutionFees <= 20000) ? 'Commission 20% = '. $commission_20 : (($tutionFees >= 7000 && $tutionFees <= 10000) ? 'Commission 15% = '. $commission_15 : 'Invalid') );




//Thank you 
