<?php
//判断请求方式
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //打印数据
    //var_dump($_POST);die;
    echo '{"status":1,"msg":"\u66f4\u65b0\u6210\u529f"}';exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'/>
<title>简简单单可以有^_^</title>
<meta name='keywords' content=''/>
<meta name='description' content=''/>
<link rel='icon' href='/yidan/images/favicon.ico' type='image/x-icon' />
<link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel='stylesheet' href='/yidan/css/yidan.css'/>
<link rel='stylesheet' href='/yidan/css/admin.css'/>
 

<script src='/yidan/js/jquery-1.7.1.min.js'></script>
<script src='/yidan/js/jquery.nicescroll.js'></script>
<script src='/yidan/js/upload/webuploader.js'></script>
<script src='/yidan/js/yidan.js'></script>
<script src='/yidan/js/gooddate/WdatePicker.js'></script>
<script src='/yidan/js/edit/kindeditor.js'></script>
<script src='/yidan/js/edit/zh_CN.js'></script>
<script src='/yidan/js/base64/my_core-min.js'></script>
<script src='/yidan/js/base64/my_enc-base64-min.js'></script>
<link rel='stylesheet'  href='/yidan/js/edit/themes/default/default.css' />
<link rel='stylesheet' href='/yidan/css/admin_login.css'/>

<script>
//http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/7/8/322317b7d044fb1ebce220dc1e72481e/ui-buttons.html

$(document).ready(function () {
    G = {
        windowHeight: $(window).height(),
        windowWidth: $(window).width()
    };
    //$('.bg').height(G.windowHeight);
    init_com();
    init_alert();
    init_form();
    alert({'title':'yidan',
        'content':$('#login').html(),
    });

    $(document).on('click', '.login-submit', function (event) {
        var action  = $('#action').attr('action');
        var data = $('#action').serialize();
        $.ajax({url: action, type: 'POST', dataType: 'json', data: data, success: function (requestData) {
            alert({
                'content': requestData.msg,
                'model': 'msg',
                'close': requestData.status ? '.alert_msg_body' : '.alert_msg_body',
                'type': requestData.status ? 'success' : 'failed',
                'time': 500,
                'hideAlert':true
            });
            if(requestData.status){
                setTimeout(function () {
                goUrl({'type':'load','url':'/index.html'});
                },1000);
            }

        }});

    });




});
var bgNum = 1;
changeBg();
function changeBg()
{
  bgNum++
  if(bgNum==3){
      bgNum = 1;
  }
  /*
  $('.bg').animate({
    //opacity:'0',
  },1000,function(){
    //$(this).css({'opacity':1});

  });
  */
  $('.bg').attr('class','bg bg'+bgNum);
  setTimeout(changeBg, 5000);
}
</script>

</head>
<body class='f-ff1 f-cb body-height'>

<div class='alert'>
    <div class='alert_div' id='alert_div'>
        <div class='head' id='alert_head'>
            <span class='title'></span>
            <span class='close hover'><i class='fa fa-close'></i></span>
            <span class='change hover'><i class='fa fa-expand'></i></span>
        </div>
        <div class='alert_content' id='alert_content'></div>
    </div>
    <div class='alert_msg_body'>
        <span class='msg_left warning'><i class=''></i></span>
        <span class='msg_content'></span>
        <span class='msg_right'></span>
    </div>
</div>
<div class='bg2 bg'></div>
<div id='login' style='display: none;'>
<div  class='m-form append login' style='width: 300px;'>
    <form name='' id='action' action='/login.php' method='post'>
        <fieldset>
            <div class='formitm'>
                <label class='lab'>username：</label>
                <div class='ipt'>
                    <input type='text' name='username' value='' class='u-ipt hover' />   <i class='fa fa-user'></i>
                </div>
            </div>
            <div class='formitm'>
                <label class='lab'>password：</label>
                <div class='ipt'>
                    <input type='password' name='password' value='' class='u-ipt hover' />   <i style='right: 2px;' class='fa fa-key'></i>
                </div>
            </div>
            <div class='formitm formitm_button'>
                <button type='button' class='btn-info hover btn login-submit'>登录</button>
            </div>
        </fieldset>
    </form>
</div>
</div>

</body>
</html>