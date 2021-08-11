<?php
include __DIR__. '/partials/init.php';

$data = "john's cat";

echo $pdo->quote($data); // 做 SQL 跳脫