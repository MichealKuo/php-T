<h2>
    <?php
    // 設定時區
    // date_default_timezone_set('Asia/Taipei');

    echo time(). '<br>';
    echo date("Y-m-d H:i:s"). '<br>';
    echo date("D  N  w"). '<br>'; // D 星期４ Thu N  1-7 星期天是7  ,w 0-6 6是星期天
    echo date("Y-m-d H:i:s", time()+40*24*60*60). '<br>';

    $t = strtotime('2021/09/06'); // timestamp
    echo date("Y-m-d H:i:s", $t). '<br>';
    ?>
</h2>
