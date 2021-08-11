<?php

require __DIR__. '/partials/init.php';


//address_book localhost 裏的
$stmt = $pdo->query("SELECT * FROM address_book" );
// print_r( $stmt->fetch(PDO::FETCH_ASSOC));
echo json_encode( $stmt->fetch(PDO::FETCH_ASSOC));



//FETCH_BOTH  兩個陣列都有 ,FETCH_NUM 索引陣列 0,1,2,3,4
//ASSOC 關聯陣列 sid,name,address,email


 



//fetchAll() 全部拿出來