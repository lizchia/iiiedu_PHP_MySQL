<?php
//判斷是否登入 (確認先前指派的 session 索引是否存在)
if( !isset($_SESSION['username']) ) {
    //3 秒後跳頁
    header("Refresh: 3; url=./32-3-1.php");
    echo "請確實登入…3秒後自動回登入頁";
    exit();
}