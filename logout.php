<?php
//判断请求方式
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //打印数据
    //var_dump($_POST);die;
    echo '{"status":1,"msg":"\u66f4\u65b0\u6210\u529f"}';exit();
}
?>