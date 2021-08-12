<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="a20210811-07-files.php" name="form1" method="post" enctype="multipart/form-data">
    <input type="file" name="avatar[]" accept="image/*" multiple>
    <!-- 如果要上傳多個檔案 php 一定要加 name="avatar[] 的中括號-->
    <br>
    <input type="text" name="name" placeholder="姓名">
    <br>
    <input type="submit">
</form>





</body>
</html>


