<?php

$ar = [
    'a' =>100,
    'name' => 'bill',

];

//轉換為URL ENCODE格式

echo http_build_query($ar);