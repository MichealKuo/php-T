<pre>
<?php

$ar1 = array(3, 5, 7);  // 舊的語法，通用
$ar2 = [ 3, 5, 8];  // 5.X 才支援的語法

var_dump($ar1);   // 查看內容、除錯用
print_r($ar2);   // 查看內容、除錯用




$ar3 = array (
    'name' =>'DAVID',
    'age' => '23',
);

var_dump($ar3);


$ar4 = [
    'name' =>'DAVID-p',
    'age' => '23',
];
print_r($ar4);


?>
</pre>