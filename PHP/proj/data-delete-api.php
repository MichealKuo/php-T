<?php
include __DIR__. '/partials/init.php';


/*

這邊操作是已經轉換intval   所以不用在
$sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`,
    `birthday`,`address`,`created_at`
    ) VALUES (
        ?,?,?,
        ?,?, NOW()
    )";
*/

//empty 測試這Function是不是空的 可以用 '!'
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$output = [
    'success' =>false,
    'error' => '沒有給 sid',
    'sid' => $sid,
];


if(! empty($sid)){

    $sql = "DELETE FROM `address_book` WHERE sid=$sid";
    $stmt = $pdo->query($sql);

    if($stmt->rowCount()==1){
        $output['success'] =true;
        $output['code'] = '';
    } else {
        $output['error'] = '沒有刪除成功(可能沒有該筆資料)';
    }
}  
echo json_encode($output, JSON_UNESCAPED_UNICODE);

/*

if(! empty($sid)){
    $sql = "DELETE FROM `address_book` WHERE sid=$sid";
    $stmt = $pdo->query($sql);
}
//$_SERVER['HTTP_REFERER'] 從哪個頁面連過來

if(isset($_SERVER['HTTP_REFERER'])){
    header('Location:'. $_SERVER['HTTP_REFERER']);

} else {
    header('Location: data-list.php');
}

*/
//referer 利用這個特性去設定 刪除項目後不會跳轉到其他頁面