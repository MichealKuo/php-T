
<?php
include __DIR__. '/partials/init.php';

header('Content-Type: application/json');

// 要存放圖檔的資料夾
$folder = __DIR__. '/imgs/';

//允許的檔案類型
$imgTypes = [
    'image/jpeg' => '.jpg',
    'image/png' => '.png',
];

$output = [
    'success' => false,
    'error' => '資料欄位不足',
    'code' => 0,
    'postData' => $_POST,
];


if(empty($_POST['nickname'])){
    echo json_encode($output);
    exit;
}

// 預設是沒有上傳資料，沒有上傳成功
$isSaved = false;


// 如果有上傳檔案
if(! empty($_FILES) and !empty($_FILES['avatar'])){
                                //$_FILES['avatar']['type']現在上傳的檔案是什麼把他對應到imgtype
    //ext 是延伸的檔名
    $ext = isset($imgTypes[$_FILES['avatar']['type']]) ? $imgTypes[$_FILES['avatar']['type']] : null ; // 取得副檔名

    // 如果是允許的檔案類型
    if(! empty($ext)){
        $filename = sha1( $_FILES['avatar']['name']. rand()). $ext;
                    //sha1( $_FILES['avatar']['name']. rand())主檔名  $ext 副檔名
        if(move_uploaded_file(
            $_FILES['avatar']['tmp_name'],
            $folder. $filename

            //可以上傳檔案  檔案類型符合條件  把檔案搬到
        )){
            $sql = "UPDATE `members` SET `avatar`=?, `nickname`=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                $filename,
                $_POST['nickname'],
                $_SESSION['user']['id'],
            ]);

            if($stmt->rowCount()) {
                $isSaved = true;

                $_SESSION['user']['avatar'] = $filename;
                $_SESSION['user']['nickname'] = $_POST['nickname'];

                $output['filename'] = $filename;
                $output['error'] = '';
                $output['success'] = true;

                echo json_encode($output);
                exit;
            }
                
        }
    }

}

if(! $isSaved){
    $sql = "UPDATE `members` SET `nickname`=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['nickname'],
        $_SESSION['user']['id'],
    ]);

    if($stmt->rowCount()) {
        $_SESSION['user']['nickname'] = $_POST['nickname'];
        $output['error'] = '';
        $output['success'] = true;
    }
}

echo json_encode($output);
