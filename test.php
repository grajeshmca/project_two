<?php

$a = 1;
$b = &$a;
//$c = $$a;

$c = 2+3+7;

echo $a.",".$b.",".$c; 





/* function reverseString($str) {
    $reversedStr = ''; 
    $strLen = strlen($str);
    for($i=$strLen-1; $i>=0; $i--){
      $reversedStr .= $str[$i]; 
    }
    return $reversedStr;
  }
  
  $input = "RAJESH";
  
  $output = reverseString($input);
  
  echo "Reversed String: " . $output;

  //$array = array(1 => "aa", "4" => "BB", 4 => "cc", 1.5 => "DD", true => "ee");
  $array = array(1 => "AAA", "3" => "bbb", 4 => "CCC", 1.5 => "dd", true => "EE",true => "FF");


  print_r($array);

  echo $array[1];*/

?>
