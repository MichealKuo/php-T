<?php


if(! isset($_COOKIE['my_cookie'])){
    $_COOKIE['my_cookie'] = 1;
} else {
    $_COOKIE['my_cookie'] ++;
}

?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap4/css">
    <title>Document</title>
</head>
<body>
    <script src=""></script>
    <script src=""></script>

    <?= $_COOKIE['my_cookie'] ?> 

</body>
</html>