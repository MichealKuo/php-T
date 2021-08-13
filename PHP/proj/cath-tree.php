<?php

include __DIR__. '/partials/init.php';

//拿到第一層資料
$sql = "SELECT * FROM `categories` WHERE `parent_sid` = 0 ORDER BY `sequence`";

$rows = $pdo->query($sql)->fetchAll();

echo json_encode($rows, JSON_UNESCAPED_UNICODE);


