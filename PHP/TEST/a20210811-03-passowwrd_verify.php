<?php

$hash = '$2y$10$7l.hfNGW2w10T2KsdnyirOLxxe1MVgxnWRGQOS6JLktWCqw2yvi2a';

echo password_verify('123456', $hash) ? 'yes' : 'no';

/*
 SELECT * FROM `members` WHERE `email`='ming@gg.com' AND `password`=SHA1('123456');
 */


// 利用hash 發來的密碼去做驗證  正確會出現 Y