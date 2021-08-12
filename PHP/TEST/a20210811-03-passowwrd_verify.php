<?php

$hash = '$2y$10$Uhr03aiKJ/qROq8LdoeM/OBDmnpWUhSe33Ru0viNuwmXK4BU6/ZLu';

echo password_verify('slkdflkfk34', $hash) ? 'yes' : 'no';

/*
 SELECT * FROM `members` WHERE `email`='ming@gg.com' AND `password`=SHA1('123456');
 */


// 利用hash 發來的密碼去做驗證  正確會出現 Y