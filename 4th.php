<?php
function adder($str2)
{
  $str2 .= 'Call By Value';
  //echo $str2. '<br>';
}
$str = 'Hello ';
adder($str);
echo $str;
?>