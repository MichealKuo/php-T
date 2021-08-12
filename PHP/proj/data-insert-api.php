<?php
include __DIR__. '/partials/init.php'; 
header('Content-Type: application/json');


$output = [
     'success' => false,
     'error' => '',
     'code' => 0,
     'rowCount' => 0,
     'postData' => $_POST,
];

//mb_strlen 中文字串長度
//strlen
// TODO:資料格式檢查

//避免直接拜訪出現異常 錯誤訊息


// if(!isset($_POST['name']) or !isset($_POST['email']) or !isset($_POST['rowCount']) or !isset($_POST['postData'])){
//     $output['error'] = '沒有設定姓名和信箱';
//     $output['code'] = 666;
//     $output['rowCount'] = 0;
//     $output['postData'] = 'back to code';
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit; // 直接離開 (中斷) 程式
// }


if(strlen($_POST['name'])<2){
    $output['error'] = '姓名長度太短';
    $output['code'] = '410';

    echo json_encode($output);
    exit;

}

// if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//     $output['error'] = 'email 格式錯誤';
//     $output['code'] = 420;
//     echo json_encode($output);
//     exit;
// }
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $output['error'] = 'email 格式錯誤';
    $output['code'] = 420;

    echo json_encode($output);
    exit;

}





$sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`,
    `birthday`,`address`,`created_at`
    ) VALUES (
        ?,?,?,
        ?,?, NOW()
    )";

    
//只要資料是由用戶端傳送進來 一律使用prepare

$stmt = $pdo->prepare($sql);
$stmt->execute([

    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['birthday'],
    $_POST['address'],
    
]);



$output['rowCount'] = $stmt->rowCount();
if($stmt->rowCount()==1){
    $output['success'] = true;
}

echo json_encode($output);