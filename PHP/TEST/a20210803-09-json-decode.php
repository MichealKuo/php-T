<pre>
<?php

$str = '{"name":"\u5c0f\u660e","age":23,"gender":"\u7537\u751f"}';


$obj = json_decode($str); //轉換為 php object
$ar = json_decode($str, true); //轉換為 關聯式 array
//第二參數 true會回傳關聯array 如果是false 是object
print_r($obj); //
echo '<br>---<br>';

print_r($ar); //
echo '<br>---<br>';



echo $obj -> age; //物件的屬性

echo '<br>---<br>';

echo $ar['name']; // 中括號裡面是要拿到的key   陣列的元素值








?>
</pre>