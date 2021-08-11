<pre>
<?php


for($i=1; $i<10; $i++){
    $br[] = $i*$i;
}




array_push($br, 100, 101);

echo json_encode($br); //轉換成是 json srt

echo '<br>_________________________ <br>';



$ar = array(
    
    'name' => '小明/帥',
    'age' => 23,
    'gender' => '男生',
    
); 
echo json_encode($ar); 
echo '<br>_________________________ <br>';
echo json_encode($ar, JSON_UNESCAPED_UNICODE); //轉換成JSON  不跳脫中文字
echo '<br>_________________________ <br>';
echo json_encode($ar, JSON_UNESCAPED_SLASHES); //轉換成JSON  不跳脫slash
echo '<br>_________________________ <br>';
echo json_encode($ar, JSON_UNESCAPED_SLASHES + JSON_UNESCAPED_UNICODE); //轉換成JSON  不跳脫中slash  + (|) 不跳脫中文
echo '<br>_________________________ <br>';




?>
</pre>