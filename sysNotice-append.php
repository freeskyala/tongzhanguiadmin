<?php
//判断请求方式
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //打印数据
    //var_dump($_POST);die;
    echo '{"status":1,"msg":"\u66f4\u65b0\u6210\u529f"}';exit();
}
?>
<style>
.m-form .ke-edit{
    height:200px !important;
}
</style>
<div class='m-form append' style='width: 600px;'>
    <form name='' action='/sysNotice-append.php' method='post'>
        <fieldset>
            <div class='formitm'>
                <label class='lab'>title：</label>
                <div class='ipt'>
                    <input type='text' name='title' value='' class='u-ipt hover' />
                </div>

            </div>
            <div class='formitm'>
                <label class='lab'>groupIdStr：</label>
                <div class='ipt'>
                    <!-- select_model_tag select_model_select select_model_tag-->
                    <span class='u-ipt select select_model_tag'>
                        <span class='input_select_div'>
                            <input type='text' value='' class='input_select u-ipt'/>
                        </span>
                        <ul class='dropdown_menu' name='groupIdStr'>
                                                                                    <li class='dropdown_menu_li hover'   val='0'><a>选择分组</a></li>
                                                        <li class='dropdown_menu_li hover'   val='10'><a>前端</a></li>
                                                        <li class='dropdown_menu_li hover'   val='9'><a>UI设计</a></li>
                                                        <li class='dropdown_menu_li hover'   val='8'><a>admin</a></li>
                                                        <li class='dropdown_menu_li hover'   val='7'><a>客服</a></li>
                                                        <li class='dropdown_menu_li hover'   val='6'><a>产品</a></li>
                                                        <li class='dropdown_menu_li hover'   val='5'><a>运营</a></li>
                                                        <li class='dropdown_menu_li hover'   val='4'><a>运维</a></li>
                                                        <li class='dropdown_menu_li hover'   val='3'><a>销售</a></li>
                                                        <li class='dropdown_menu_li hover'   val='2'><a>后端php</a></li>
                                                        <li class='dropdown_menu_li hover'   val='1'><a>测试</a></li>
                                                                                </ul>
                    </span>
                </div>
            </div>

            <input type='hidden' name="id" value='0'/>
            <div class='formitm'>
                <label class='lab'>content：</label>
                <div class='ipt'>
                    <textarea name="content"  style='visibility:hidden;height:150px;' class='u-ipt hover u-iptextarea editContent'></textarea>
                </div>
            </div>
            <div class='formitm formitm_button'>
                <button type='button' class='btn-info hover btn append-submit'>保存</button>
                <button type='button' class='btn-primary hover btn append-cancle'>取消</button>
            </div>
        </fieldset>
    </form>
</div>
 <script>
    var editor;
    KindEditor.ready(function(K) {
             editor = K.create('textarea[name="content"]', {
                    allowFileManager : false,
                    pasteType : 2,  //0 禁止粘贴 1 纯文本粘贴 2 HTML粘贴
                    urlType : 'absolute', //绝对 absolute //加域名 domain relative
                    newlineTag : 'p',  //回车换行设置
                    uploadPath : '/sysNotice-kindEditUpload.html',
                    //fileManagerJson : '../php/file_manager_json.php',
                    afterChange : function() {   //统计字数
                    //	p('您当前输入了'+this.count()+' 个文字。（字数统计包含HTML代码。）');
                    //	p('您当前输入了'+this.count('text')+' 个文字。（字数统计包含纯文本、IMG、EMBED，不包含换行符，IMG和EMBED算一个文字。）');
                    },
                    autoHeightMode : false,//自动调整高度
                    afterCreate : function() {
                            this.loadPlugin('autoheight');
                    },
                    items : [
                        'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                        'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                        'insertunorderedlist', '|', 'emoticons', 'image', 'link'
                    ]

            });
    });
    </script><script>
 $(document).ready(function () {
     $('.select .dropdown_menu .selected').trigger("click");
     $('.dropdown_menu').hide();
 });
</script>