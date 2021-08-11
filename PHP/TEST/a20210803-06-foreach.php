<pre>
<?php


for($i=1; $i<10; $i++){
    $br[] = $i*$i;
}





//要查看的對象是誰 + as
foreach($br as $v ){   
    echo "$v <br>";     //$v是自己設定的變數 為了拿到br裏的物質
}

echo '_________________________ <br>';

$ar = array(
    'Hello',
    'name' => 'David',
    'age' => 23,
    'gender' => 'male',
    123,
); // 原則上不要混用索引式、關聯式


foreach($ar as $k => $v){

    echo " $k = $v <br>" ;
}
echo '____________________';
echo count($ar);

?>
</pre>d