<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>


<table border="1">
    <?php for($i=1; $i<=9; $i++): ?>
    <tr>
        <?php for($k=1; $k<=9; $k++): ?>
            <td><?= sprintf('&nbsp &nbsp  %s * %s = %s &nbsp &nbsp ', $i, $k, $i*$k) ?></td> 
        <?php endfor ?>   
         
        <!-- //sprintf將結構字串化 -->
    </tr>
    <?php endfor ?>
</table>

</body>
</html>


<!-- &nbsp  空白 -->
<!-- //sprintf 會輸出後 回傳字串 -->

<!-- //printf  會輸出後 不會回傳字串 -->

<!-- <td><?php/* printf('%s * %s = %s', $i, $k, $i*$k) */ ?></td> -->