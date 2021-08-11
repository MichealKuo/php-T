



<?php

// echo $_GET['a'] ?? ''; //如果沒有設定 使用預設值


$a = isset($_GET['a']) ? intval($_GET['a']) :0;

//isset($_GET['a']) 判斷有沒有設定   有會拿到   intval($_GET['a'])  否０

$b = isset($_GET['b']) ? intval($_GET['b']) :0;




echo $a + $b;


?>



