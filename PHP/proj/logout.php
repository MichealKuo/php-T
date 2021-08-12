<?php
session_start();

// session_destroy();  清除所有的session


unset($_SESSION['user']);

//unset 可以移除陣列的session變數

header('Location: index_.php');    //redirect 直接跳轉到別的頁面
