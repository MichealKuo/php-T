<?php
   
   
    // 設定 cookie 請在所有 html 內容之前

    //其實是設定 response header
    
    setcookie('my_cookie','1');
    //一定要是字串

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?= $_COOKIE['my_cookie'] ?>         


        
</body>
</html>