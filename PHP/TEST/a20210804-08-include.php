<?php

//require如果找不到該檔案 發出warning

include 'a20210802-08-query-string.php'  ;   //包含某個php檔案   把某個檔案直接貼過來



include __DIR__.'/a20210802-08-query-string.php'  ;   


//require如果找不到該檔案 發出error
require 'a20210802-08-query-string.php'  ; //包含某個php檔案   把某個檔案直接貼過來


require __DIR__. '/a20210802-08-query-string.php'
//suggest this way



?>