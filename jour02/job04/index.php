<?php
$num = 0;

while ($num <= 100){
  
if (!($num%5)and !($num%3)){
 echo "<br/>FizzBuzz";
}
elseif(!($num%5)){
    echo "<br/>Buzz";
}
elseif(!($num%3)){
    echo "<br/>Fizz";
}
else  {
    echo "<br/>" .$num;
}$num++;
}