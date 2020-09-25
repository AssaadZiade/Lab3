<!DOCTYPE html>
<html lang="en">
<?php 

function Palindrome($string){ 

    if ((strlen($string) == 1) || (strlen($string) == 0)){ 
        echo "  It is a palindrome"; 
    } 
  
    else
    { 
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1))
        { 
            return Palindrome(substr($string,1,strlen($string) -2)); 
        } 
        else{  
            echo "It is not a Palindrome"; } 
    } 
} 
  
$string = "palindrome"; 
Palindrome($string); 
echo '<br><br>';
$otherString = "radar";
Palindrome($otherString);

function randomCapitalizer($string){

for ($i=0 ; $i < strlen($string) ; $i++)
    $string[$i] = (rand(0, 100) > 50? strtoupper($string[$i]):strtolower($string[$i]));

echo $string;
}
echo '<br><br>';
randomCapitalizer("Sentence to test the function");

function GCD( $a, $b ) {
	$large = $a > $b ? $a: $b;
	$small = $a > $b ? $b: $a;
	$remainder = $large % $small;
	return 0 == $remainder ? $small : GCD( $small, $remainder );
}

echo '<br><br>';
echo GCD(30,42);

function insideOut($array) {
    $arrayLength = sizeof($array);
    if ($arrayLength%2 != 0) return;
    else {
        $temp = $array;
        $j = 0;
        for ($i = $arrayLength/2-1; $i >= 0; $i--) 
           { $array[$j] = $temp[$i];
            $j++;
           }
        for ($i = $arrayLength-1; $i >= $arrayLength/2; $i--) 
            {
                $array[$j] = $temp[$i];
                $j++;
            }
            return $array;
    }
}
echo "<br><br>";
print_r(insideOut(array("Everyone", "says", "Kelly", "is", "REALLY",
"awesome")));
?>  
