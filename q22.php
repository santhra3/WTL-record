<?php
function Factorial($number){
    if($number <= 1){  
        return 1;  
    }  
    else{  
        return $number * Factorial($number - 1);  
    }  
}
$number = 20;
$fact = Factorial($number);
echo "Factorial = $fact";
?>
 
