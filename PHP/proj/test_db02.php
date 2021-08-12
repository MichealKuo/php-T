<?php

require __DIR__. '/partials/init.php';



$stmt = $pdo->query("SELECT * FROM address_book LIMIT 10" );

//一次只能一筆資料 總共拿10次 一筆資料  直到空值/undefined自動跳出
while($r = $stmt->fetch()){
    echo "<p>{$r['name']}: {$r['address']}</p>";
}
//['name']因為這屬性是陣列裡面的 所以用中括號 包起來

