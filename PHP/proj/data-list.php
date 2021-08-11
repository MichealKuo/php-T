<?php
    include __DIR__. '/partials/init.php';
    $title = '資料列表';

    // 固定每一頁最多幾筆
    $perPage = 5;

    // 用戶決定查看第幾頁，預設值為 1
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

    // 總共有幾筆
    $totalRows = $pdo->query("SELECT count(1) FROM address_book")
        ->fetch(PDO::FETCH_NUM)[0];

    // 總共有幾頁, 才能生出分頁按鈕
    $totalPages = ceil($totalRows/$perPage); // 正數是無條件進位

    // 讓 $page 的值在安全的範圍
    if($page<1){
        header('Location: ?page=1');
        exit;
    }
    if($page>$totalPages){
        header('Location: ?page='. $totalPages);
        exit;
    }

    $sql = sprintf("SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s",
        ($page-1)*$perPage, $perPage );

    $rows = $pdo->query($sql)->fetchAll();


?>
<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>
    <style>
        table tbody i.fas.fa-trash-alt {
            color: darkred;
        }
        table tbody i.fas.fa-trash-alt.ajaxDelete {
            color: darkorange;
            cursor: pointer;
        }
        
    </style>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-end">

                    <li class="page-item <?= $page<=1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page-1 ?>">
                            <i class="fas fa-arrow-circle-left"></i>
                        </a>
                    </li>

                    <?php for($i=$page-5; $i<=$page+5; $i++):
                        if($i>=1 and $i<=$totalPages): ?>
                    <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                    <?php endif;
                        endfor; ?>

                    <li class="page-item <?= $page>=$totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col"><i class="fas fa-trash-alt"></i></th>
                    <th scope="col">sid Ajax</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">birthday</th>
                    <th scope="col">address</th>
                    <th scope="col"><i class="fas fa-edit"></i></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($rows as $r): ?>
                <tr data-sid="<?= $r['sid'] ?>"> 
                <!--  自訂的元素 data-sid-->
                    <td>
                        <a href="data-delete.php?sid=<?= $r['sid'] ?>"
                        onclick="return confirm('確定要刪除編號為 <?= $r['sid'] ?> 的資料嗎？')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                    <td>
                        <i class="fas fa-trash-alt ajaxDelete"></i>
                    </td>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['birthday'] ?></td>
                    <!--
                    <td><?= strip_tags($r['address']) ?></td>
                    -->
                    <td><?= htmlentities($r['address']) ?></td>
                    <td>
                        <a href="data-edit.php?sid=<?= $r['sid'] ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>





</div>
<?php include __DIR__. '/partials/scripts.php'; ?>
<script>
    const myTable = document.querySelector('table');

    myTable.addEventListener('click', function(event){

        // 判斷有沒有點到橙色的垃圾筒
        if(event.target.classList.contains('ajaxDelete')){
            // console.log(event.target.closest('tr'));
            const tr = event.target.closest('tr');
            const sid = tr.getAttribute('data-sid');

            console.log(`tr.dataset.sid:`, tr.dataset.sid); //也可以這樣拿
            // console.log(sid);

            if(confirm(`是否要刪除編號為 ${sid} 的資料？`)){
                fetch('data-delete-api.php?sid=' + sid)
                    .then(r=>r.json())
                    .then(obj=>{
                        if(obj.success){
                            tr.remove();  // 從 DOM 裡移除元素
                            // TODO: 1. 刷頁面, 2. 取得該頁的資料再呈現

                        } else {
                            alert(obj.error);
                        }
                    });
            }

        }
    });
</script>
<?php include __DIR__. '/partials/html-foot.php'; ?>
<!-- //可以把他分成4部分 在利用include __Dir__合併在php頁成現 -->