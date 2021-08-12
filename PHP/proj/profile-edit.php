<?php
    include __DIR__. '/partials/init.php';
    $title = '修改資料';

    if(! isset($_SESSION['user'])){
        header('Location: index_.php');
        exit;
    }


    $sql = "SELECT * FROM `members` WHERE id=". intval($_SESSION['user']['id']);

//    echo $sql; exit;

    $r = $pdo->query($sql)->fetch();

    if(empty($r)){
        header('Location: index_.php');
        exit;
    }
    // echo json_encode($r, JSON_UNESCAPED_UNICODE);
?>
<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>
<style>
    form .form-group small {
        color: red;

    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">修改個人資料</h5>

                    <form name="form1" onsubmit="checkForm(); return false;">
                        <input type="hidden" name="sid" value="<?= $r['sid'] ?>">
                        <div class="form-group">
                            <label for="name">大頭貼*</label>
                            <input type="file" class="form-control" id="name" name="name"
                                value="<?= htmlentities($r['name']) ?>">
                            <?php if(empty( $r['avatar'])): ?>
                                <!-- 預設大頭貼 -->
                            <?php else: ?>   
                                <!-- 顯示原本的大頭貼 --> 
                                <img src=" 'imgs/' <?= $r['avatar'] ?>" alt="" width="300px">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">email (帳號不能修改)</label>
                            <input type="text" class="form-control" disabled
                                   value="<?= htmlentities($r['email']) ?>">
                            <small class="form-text "></small>
                        </div>
                        <div class="form-group">
                            <label for="email">暱稱</label>
                            <input type="text" class="form-control" 
                                   value="<?= htmlentities($r['nickname']) ?>">
                            <small class="form-text "></small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">修改</button>
                    </form>


                </div>
            </div>
        </div>
    </div>


</div>
<?php include __DIR__. '/partials/scripts.php'; ?>
<script>
    

    function checkForm(){
        // 欄位的外觀要回復原來的狀態
            //上傳一定要用FormData 和 post
            const fd = new FormData(document.form1);
            fetch('data-edit-api.php', {
                method: 'POST',
                body: fd
            })
                .then(r=>r.json())
                .then(obj=>{
                    console.log(obj);
                    if(obj.success){
                        location.href = 'data-list.php';
                        alert('修改成功');
                    } else {
                        alert(obj.error);
                    }
                })
                .catch(error=>{
                    console.log('error:', error);
                });
        }
    
</script>
<?php include __DIR__. '/partials/html-foot.php'; ?>
