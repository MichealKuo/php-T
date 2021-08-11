<h4>



<?php

$a = 1.2;
var_dump($a);
echo '<br>';

var_dump(7 && 5); // 邏輯運算子的結果一定是 bool
echo '<br>';
var_dump(7 and 5); // 邏輯運算子的結果一定是 bool
echo '<br>';


$b = 7 || 5;    //&&, || 優先權彼等好高
var_dump($b);
echo '<br>';


$c = 7 or 5 ; //and, or 優先權比等號低

var_dump($c);
echo '<br>';



?>


</h4>
