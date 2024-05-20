
<?php
//  Write a PHP function to reverse a given string. For example, if the input is "hello", the output should be "olleh". 


$string ="hello";
$lenght = strlen($string);
$newstring='';
for($i=$lenght-1; $i>=0;$i--){
    $newstring .= $string[$i];
}
echo $newstring;
?>