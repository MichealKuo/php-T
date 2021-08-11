<pre>
<?php


for($i=1; $i<10; $i++){
    $br[] = $i*$i;
}



print_r($br);
echo '<br>';

array_push($br, 100, 101);

//echo $br;   不要直接將陣列轉為字串



echo implode(',', $br). '<br>';  // 將陣列接成字串



$str = '1-2-3-4-5-6'; 


$ar = explode('-', $str); //字串切割成陣列
print_r($ar);

?>
</pre>