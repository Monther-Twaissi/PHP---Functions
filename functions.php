<?php
function fact($int)
{
    if($int >= 0){

        if($int ==0)
        {
            return 1;
        }
        else 
        {	
            return $int * fact($int-1);
        }
    }
    else{
        return "Invalid Number";
    }
	}
    echo fact(4);

    echo "<br/>"."**************************"."<br/>";

    function IsPrime($number)
{
 for($i=2; $i<$number; $i++)
   {
      if($number %$i ==0)
	      {
		   return 0;
        }else{

            return 1;
        }
   }
   }
   $n = IsPrime(3);
if ($n==0)
echo 'Not a Prime Number';
else
echo 'Prime Number';

echo "<br/>"."**************************"."<br/>";

function strReverse($string){ 
    return strrev($string); 
} 
  
echo strReverse("Coding Academy");

echo "<br/>"."**************************"."<br/>";

$names = array("Monther", "Ahmad", "Ashraf");
sort($names);

$namesLength = count($names);
for($x = 0; $x < $namesLength; $x++) {
  echo $names[$x];
  echo "<br>";
}
echo "<br/>"."**************************"."<br/>";

function isLower($str1)
   {
    for ($i = 0; $i < strlen($str1); $i++) {
	      if (ord($str1[$i]) >= ord('A') &&
          ord($str1[$i]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(isLower('monther twaissi'));
var_dump(isLower('Monther Twaissi'));

echo "<br/>"."**************************"."<br/>";

function isPalindrome($str2) 
{
  if ($str2 == strrev($str2))
      return 1;
  else
	  return 0;
}
echo isPalindrome('civic');

echo "<br/>"."**************************"."<br/>";

function consecutive($arr, $value)
{
$count = count($arr) - 2;
$result=[];
for ($x = 0; $x < $count; $x++) {
    if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $value) {
        array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $value");
    }
}
return $result;
}
$array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
print_r(consecutive($array, 16));
print_r(consecutive($array, 12));
print_r(consecutive($array, 8));

echo "<br/>"."**************************"."<br/>";


echo "<br/>"."**************************"."<br/>";


echo "<br/>"."**************************"."<br/>";


echo "<br/>"."**************************"."<br/>";
   ?>