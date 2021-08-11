<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
//1
<?php

$age = isset($_GET['age']) ? intval($_GET['age']) : 0 ;

if($age >= 18 ){
    echo '<img src="./" alt="">';
} else {
    echo '<img src="./" alt="">';
}


//2
<?php
$age = isset($_GET['age']) ? intval($_GET['age']) : 0;

if($age >= 18){
?>
    <img src="imgs/_111434467_gettyimages-1143489763.jpeg" alt="">
<?php
} else {
?>
    <img src="imgs/gettyimages-955480082_web.jpeg" alt="">
<?php
}
?>




?>

</body>
</html>