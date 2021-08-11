<pre>
<?php

$ar = array(
    
    'name' => '小明',
    'age' => 23,
    'gender' => '男生',
    
); 
//指定給另外一個變數
$ar2 = $ar ; // 複製新的陣列在指定 (設定值) , set by value

$ar2['name'] = '陳曉華';



echo json_encode($ar, JSON_UNESCAPED_UNICODE);

echo '<br>__________<br>';


echo json_encode($ar2, JSON_UNESCAPED_UNICODE);

echo '<br>__________<br>';


$ar3 = &$ar ; //設定值位址 set by address


$ar3['name'] = '許大功';

echo json_encode($ar, JSON_UNESCAPED_UNICODE);

echo '<br>__________<br>';


echo json_encode($ar3, JSON_UNESCAPED_UNICODE);

echo '<br>__________<br>';



?>




</pre>