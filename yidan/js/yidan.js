

 function setDataStartEnd(startDate, endDate) {
    $(document).on("focus", "#" + startDate,  function (event) {
        $dp.$('endDate');
        WdatePicker({onpicked:  function () {
                $('#' + endDate)[0].focus();
            }, maxDate: '#F{$dp.$D(\'' + endDate + '\')}'})
    });
    $(document).on("focus", "#" + endDate,  function (event) {
        WdatePicker({minDate: '#F{$dp.$D(\'' + startDate + '\')}'});
    });
}

 function stringToNumAbs(string) {
    return Math.abs(parseInt(string));
}
 function alert(param) {
    if (!param.title) {
        param.title = 'this is demo title';
    }

    if (param.src != undefined) {
        param.content = "<iframe id='container_iframe' name='container_iframe' src='" + param.src + "' frameborder='no' scrolling='no' height='100%' width='100%'></iframe>";
    }

    if (!param.content) {
        param.content = 'this is demo content';
    }
     
    if (!param.type) {
        param.type = 'success';
    }

    var alert_content = $('#alert_content');
    $('.alert').show();
    if (param.model == 'msg') {
        if (!param.close) {
            param.close = '.alert_msg_body';
        }
        if (!param.hideAlert) {
            $('.alert_div').hide();
        }
        $('.alert_msg_body').show();
        $('.alert_msg_body .msg_content').html(param.content);
        $('.alert .alert_msg_body .msg_left').attr('class', 'msg_left ' + param.type);
        if (param.top != undefined) {
            $('.alert_msg_body').css({'margin-left': (G.windowWidth - $('.alert_msg_body').width()) / 2, 'margin-top': param.top});
        }else{
            $('.alert_msg_body').css({'margin-left': (G.windowWidth - $('.alert_msg_body').width()) / 2, 'margin-top': 200});
        } 
    } else {
        if (!param.close) {
            param.close = '.alert_div';
        }
        alert_content.html(param.content);
        $('.alert_div .head .title').html(param.title);
        if (param.width && param.height) {
            alert_content.css({
                'width': param.width,
                'height': param.height
            });
        } else {
            alert_content.attr('style', '');
        }
        $('.alert_msg_body').hide();
        $('.alert_div').show();
        $('.alert_div').css({'left': (G.windowWidth - $('.alert_div').width()) / 2, 'top': 100});
    }

    if (param.time) {
        setTimeout( function () {
            if (param.close == 'both') {
                $('.alert_msg_body').hide();
                $('.alert_div').hide();
                $('.alert').hide();
            } else {
                $(param.close).hide();
            }
            if (param.form) {
                param.form.find('.sbumit').trigger("click");
            }
        }, param.time);
    }
}

 function isNull(param) {
    return (param == "" || param == undefined || param == null) ? false : true;
}
 function getBase64() {
    var code_fag = (arguments[1]) ? true : false;
    var code = (arguments[0]) ? arguments[0] : 'get';
    if (!code_fag) {  
        return CryptoJS.enc.Base64.stringify(CryptoJS.enc.Utf8.parse(code));
    } else {
        return CryptoJS.enc.Base64.parse(code).toString(CryptoJS.enc.Utf8);
    }
}

 function init_com(param) {
    
    if (param == undefined) {
        KindEditor.ready( function (K) {

        });
    }


    $(document).on('mouseout mouseover focusin focusout', '.hover,.dropdown_menu',  function (event) {
        if ($(this).is('.dropdown_menu')) {
            if (event.type == 'mouseover') {
                $(this).show();
            }
            if (event.type == 'mouseout') {
                $(this).hide();
            }
        } else {
            var className = $(this).attr('class').toString().split(' ');
            if (className[0] + '_hover' != className[1]) {
                if ((event.type == 'mouseover' && className[0] != 'u-ipt') || (event.type == 'focusin' && className[0] == 'u-ipt')) {
                    $(this).addClass(className[0] + '_hover');
                    $(this).find('.dropdown_menu').show();
                }
                if ((event.type == 'mouseout' && className[0] != 'u-ipt') || (event.type == 'focusout' && className[0] == 'u-ipt')) {
                    $(this).removeClass(className[0] + '_hover');
                }
            }
        }
    });

    $(document).on('click', 'a',  function (event) {

        var className = $(this).attr('class');
        if (className == undefined) {
            return true;
        }
        if (!$(this).is('.a')) {
            event.preventDefault();
            var aType = $(this).parent().attr('class');
            var href = $(this).attr('href');
            if (aType == 'menu_list_li') {
                if ($(this).is('.menu_group')) {
                    $(this).parent().next().slideToggle('fast');
                    var fag = $(this).parent().find('.menu_text_r i');
                    if (fag.is('.fa-angle-right')) {
                        fag.addClass('fa-angle-down').removeClass('fa-angle-right');
                    } else {
                        fag.addClass('fa-angle-right').removeClass('fa-angle-down');
                    }
                }

                if (href) {
                    $('#main').load(href);
                    niceScroll({id: '#main', width: '5px'});
                    var scroll = $("#main").getNiceScroll();
                    scroll.resize();

                    $('.menu_list_li a').removeClass('li_a_selected').removeClass('li_a_hover');
                    $(this).addClass('li_a_selected');
                 }
            }

            if ($(this).is('.move_menu')) {
                $('#main').load(href);
                niceScroll({id: '#main', width: '5px'});                 
                var scroll = $("#main").getNiceScroll();
                scroll.resize();
            }

            if (aType == 'page') {
                if (!$(this).is('.disabled')) {                   
                    var form = $(this).parents('form').first();
                    if (form.length) {
                        if ($(this).attr('page')) {
                            form.find('.pageInput').val($(this).attr('page'));
                        }
                        $(form.find('.sbumit')).trigger("click");
                    }else{                        
                        try {
                            if (pageBackFun && typeof (pageBackFun) == "function") {
                                pageBackFun($(this).attr('page'));
                            } else {
                            }
                        } catch (e) {
                        }
                        
                    }
                }
            }
            if ($(this).is('.a_alert')) {
                var title = $(this).attr('title');
                $.ajax({url: href, type: 'GET', dataType: 'html', data: 'data=' + $(this).attr('data'), success:  function (requestData) {
                        alert({'title': title,
                            'content': requestData,
                        });
                    }});
            }

            if ($(this).is('.a_alert_iframe')) {
                var title = $(this).attr('title');
                alert({'title': title,
                    'src': href + '?data=' + $(this).attr('data'),
                    'width': $(this).attr('iframeWidth'),
                    'height': $(this).attr('iframeHeight'),
                });
            }

            if ($(this).is('.ajax')) {
                $.ajax({url: href, type: 'POST', dataType: 'json', data: 'data=' + $(this).attr('data'), success:  function (requestData) {
                        alert({
                            'content': requestData.msg,
                            'model': 'msg',
                            'close': requestData.status ? '.alert_msg_body' : '.alert_msg_body',
                            'type': requestData.status ? 'success' : 'failed',
                            'time': 1500,
                            
                        });
                        if (requestData.status) {
                            setTimeout( function () {
                                //goUrl({});
                                 goUrl({'type':'load','url':'/login.php'});
                            }, 1500);
                        }
                    }});
            }
        }
    });

    $(document).on('click', '.sbumit,.opera-btn,.a-btn,.append-btn,.append-submit,.append-cancle',  function (event) {
        var code = false;
        if ($('.editContent').length != 0) {
            if ($('#markdownEditor').length != 0) {
                code = getBase64($('.editContent').val());
                var markdownContent = getBase64($('.editormd-preview-container').html());
                $('.markdownContent').val(markdownContent);
            } else {
                code = getBase64(editor.html());
            }

            $('.editContent').val(code);
        }

        if ($(this).is('.a-btn')) {
            var url = $(this).attr('action');
            goUrl({type: 'open', url: url});
            return true;
        }

        var form = $(this).parents('form').first();
        var data = form.serialize();
        var url = form.attr('action');


        /*sbumit todo*/                
        if ($(this).is('.sbumit')) {
            $.ajax({url: url, type: 'POST', dataType: 'html', data: data, success:  function (requestData) {
                    $('#main').html(requestData);
                }});
        }

        /*operation todo*/
        if ($(this).is('.opera-btn')) {
            var url = $(this).attr('action');
            $.ajax({url: url, type: 'POST', dataType: 'json', data: data, success:  function (requestData) {
                    alert({
                        'content': requestData.msg,
                        'model': 'msg',
                        'close': requestData.status ? 'both' : 'both',
                        'type': requestData.status ? 'success' : 'failed',
                        'time': 1500
                    });

                    form.find('.sbumit').trigger("click");
                }});
        }

        if ($(this).is('.append-btn')) {
            var url = $(this).attr('action');
            var title = $(this).attr('title');
            $.ajax({url: url, type: 'GET', dataType: 'html', data: data, success:  function (requestData) {
                    alert({
                        'title': title,
                        'content': requestData,
                    });
                }});
        }

        if ($(this).is('.append-cancle')) {
            $('#alert_head .close').trigger("click");
        }

        if ($(this).is('.append-submit')) {
            $.ajax({url: url, type: 'POST', dataType: 'json', data: data, success:  function (requestData) {
                    var form = $('.table_list form').first();
                    var url = form.attr('action');
                    if (requestData.status) {
                        $('.alert_div').hide();
                    }

                    if (code) {
                        $('.editContent').val(getBase64(code, true));
                    }

                    alert({
                        'content': requestData.msg,
                        'model': 'msg',
                        'hideAlert': true,
                        'form': requestData.status ? form : '',
                        'close': requestData.status ? 'both' : '',
                        'type': requestData.status ? 'success' : 'failed',
                        'time': 1500
                    });
                }});

        }

    });
}
 function niceScroll(para) {
    $(para.id).niceScroll({
        cursorcolor: "#39aef5",
        cursoropacitymax: 1,
        cursoropacitymin: 1,      
        touchbehavior: false,
        cursorwidth: para.width,
        cursorborder: "0",
        cursorborderradius: "5px",
    });
}
 function init_comment() {
    var emoticons = {
        '000.gif': '微笑',
        '001.gif': '再见',
        '002.gif': '鼓掌',
        '003.gif': '摇头',
        '004.gif': '哭泣',
        '005.gif': '调皮',
        '006.gif': '委屈',
        '007.gif': '吐血',
        '008.gif': '害羞',
        '009.gif': '可怜',
        '010.gif': '眨眼',
        '011.gif': '抠鼻',
        '012.gif': '亲亲',
        '013.gif': '糗',
        '014.gif': '擦汗',
        '015.gif': '鄙视',
        '016.gif': '坏笑',
        '017.gif': '无语',
        '018.gif': '018',
        '019.gif': '019',
        '020.gif': '020',
        '021.gif': '021',
        '022.gif': '022'
    };
    var emoticonsHtml = '';
    $.each(emoticons,  function (i, n) {
        emoticonsHtml += "<img  class='emot-img' src='"+G.staticDomain +'yidan/images/emoticons/'+ i + "' title='" + n + "' />";
    });
    if(G.isLogin){
        emoticonsHtml += '<button type="button" class="btn-info hover btn save">保存</button>'; 
    }else{
        emoticonsHtml += '<a href="'+G.loginUrl+'" class="btn-info hover btn loginBtn a">登陆</a>'; 
    }
   
    $('#emoticons').html(emoticonsHtml);
    $(document).on('click', '.emoticons .emot-img', function (event) {
        var src = $(this).attr("src");
        var srcText = "<img src='" + src + "' />";
        $(this).parent().next().append(srcText);
    });
     
}

 function init_form() {
    /*form select*/
    $(document).on('click keyup keydown focusin mouseout', '.input_select,.u-ipt',  function (event) {
        event.stopPropagation();
        var intpu_value = $(this).val().toString();
        var is_exit = false;
        if (event.type == 'keydown' && event.keyCode == '13') {

            event.preventDefault();
            var form = $(this).parents('form').first();
            if (form.length && !$(this).is('.input_select')) {
                $(form.find('.sbumit,.login-submit,.append-submit')).trigger('click');
            }

            if ($(this).is('.input_select')) {
                $.each($(this).parent().find('.input_select_tag'),  function (i, n) {
                    var select_text = $(this).text();
                    if (intpu_value == select_text) {
                        is_exit = true;
                    }
                });

                if (intpu_value && !is_exit) {
                    $(this).val('');
                    $(this).before("<span class='input_select_tag hover'><span class='f-fla'>" + intpu_value + "</span><i class='fa fa-close'></i></span>")
                }
            }
        }
    });
    /*form select*/
    $(document).on('click', '.select',  function (event) {
        if (!$(this).is('.select_model_input')) {
            $('.dropdown_menu').hide();
            $(this).find('.dropdown_menu').toggle();
        }
    });

    /*form select 离开关闭*/
    $(document).on('mouseleave', '.select .dropdown_menu',  function (event) {
        event.stopPropagation();
        $(this).hide();
    });

    /*form select close*/
    $(document).on('click', '.select .input_select_tag .fa-close',  function (event) {
        event.stopPropagation();
        var val = $(this).prev().val();
        var input_select_div = $(this).parents('.input_select_div').first().next().find('li');
        $.each(input_select_div,  function (i, n) {
            if ($(this).attr('val') == val) {
                $(this).removeClass("selected");
            }
        });
        $(this).parent().remove();
    });
 
    /*form select*/
    $(document).on('click', '.select .dropdown_menu li',  function (event) {
        event.stopPropagation();
        var intpu_value = $(this).attr('val');
        var input_select = $(this).parent().prev();
        var hidden_name = $($(this).parent()).attr('name');
        var input_value_text = $(this).text();
        var input_select_tag_html = "<span class='input_select_tag hover'><span class='f-fla'>" + input_value_text + "</span><input type='hidden' name='" + hidden_name + "[]' value='" + intpu_value + "' /><i class='fa fa-close'></i></span>";
        var is_exit = false;
        if ($(this).parent().parent().is('.select_model_select')) {
            if ($(input_select).find('.input_select_tag_one').length == 0) {
                input_select_tag_html = "<span class='input_select_tag_one'><span val='" + intpu_value + " class='f-fla'>" + input_value_text + "</span></span>";
                input_select.find('.input_select').before(input_select_tag_html);
            } else {
                $(input_select).find('.input_select_tag_one').html("<span val='" + intpu_value + "' class='f-fla'>" + input_value_text + "</span><input type='hidden' name='" + hidden_name + "' value='" + intpu_value + "' />");
            }

            is_exit = true;
        }
        if ($(input_select).find('.input_select_tag').length == 0) {
        } else {
            $.each($(input_select).find('.input_select_tag'),  function (i, n) {
                var select_text = $(this).text();
                if (input_value_text == select_text) {
                    is_exit = true;
                }
            });
        }
        if (!is_exit) {
            input_select.find('.input_select').before(input_select_tag_html);
        }

        if ($(input_select).find('.input_select_tag_one').length != 0 && $(input_select).find('.nosubmit').length == 0) {
            var form = $(this).parents('form').first();
            if (form.length) {
                $(form.find('.sbumit')).trigger("click");
            }
        }
        $(this).parent().hide();
    });

    /*form checkbox*/
    $(document).on('click', '.check_box,.check_box_all',  function (event) {
        var checkoux = $(this).children('i').first();
        if (checkoux.is('.fa-square-o')) {
            $(this).removeClass('check_box_unselect').addClass('check_box_select');
            checkoux.removeClass('fa-square-o').addClass('fa-check-square');
            if (!$(this).is('.check_box_all')) {
                $(this).find('.checkbox').attr("checked", true);
            }
        } else {
            $(this).removeClass('check_box_select').addClass('check_box_unselect');
            checkoux.removeClass('fa-check-square').addClass('fa-square-o');
            if (!$(this).is('.check_box_all')) {
                $(this).find('.checkbox').attr("checked", false);
            }
        }
        if ($(this).is('.check_box_all')) {
            $('.check_box').trigger('click');
        }
    });

    /*form radio*/
    $(document).on('click', '.radio_i',  function (event) {
        var left = '33px';
        if ($(this).parent().is('.radio_selected')) {
            left = '0px';
        }
        $(this).animate({
            left: left
        }, 200,  function () {
            $(this).parent().toggleClass('radio_selected');
        });
    });

}
 function init_alert() {
    
    $(document).on('click', '.alert .change,.alert .close',  function (event) {
        if ($(this).is('.close')) {
            $('.alert').hide();
        } else {
            if ($(this).find('.fa').is('.fa-expand')) {
                $(this).find('.fa').removeClass('fa-expand').addClass('fa-compress');
                $(this).parent().parent().addClass('alert_max');
            } else {
                $(this).find('.fa').removeClass('fa-compress').addClass('fa-expand');
                $(this).parent().parent().removeClass('alert_max');
            }
        }
    });
   
    $(document).on('mousedown mouseup', '.alert .head',  function (event) {
        var data = document.getElementById('alert_div');
        var disX = event.clientX - data.offsetLeft;
        var disY = event.clientY - data.offsetTop;
        var event = event || window.event;
        if (event.type == 'mouseup') {
            $(document).unbind('mousemove');
        } else {          
            $(document).mousemove( function (e) {
                var event = event || window.event;
                var maxW = document.documentElement.clientWidth - data.offsetWidth;
                var maxH = document.documentElement.clientHeight - data.offsetHeight;
                var posX = event.clientX - disX;
                var posY = event.clientY - disY;
                if (posX < 0) {
                    posX = 0;
                } else if (posX > maxW) {
                    posX = maxW;
                }
                if (posY < 0) {
                    posY = 0;
                } else if (posY > maxH) {
                    posY = maxH;
                }
                data.style.left = posX + 'px';
                data.style.top = posY + 'px'
                /*$($(this).find('.alert_div')).css({'left': (e.pageX - iDiffX), 'top': (e.pageY - iDiffY)});*/
            });
        }
    });
}

 function p() {
    var numargs = arguments.length;
    for (i = 0; i < numargs; i++) {
        console.log(arguments[i]);
    }
} 
 function goUrl(param) {
    if (param.type == undefined) {
        param.type = 'fresh';
    }

    if (param.type == 'load') {
        window.location.href = param.url;
    }
    if (param.type == 'open') {
        window.open(param.url);
    }
    if (param.type == 'back') {
        history.go(-1);
    }
    if (param.type == 'next') {
        history.go(+1);
    }
    if (param.type == 'fresh') {
        window.location.reload();
    }
}

$(window).resize( function () {
    $('#main').width($(window).width() - $('.menu').width());
});

 
 function goTop() {
     Timer = setInterval(GoTop, 10);
    
}
  function GoTop() {
        if (document.documentElement.scrollTop + document.body.scrollTop < 1) {
            clearInterval(Timer);
        } else {
            document.documentElement.scrollTop /= 1.1;
            document.body.scrollTop /= 1.1;
        }
    }
 
window.onload =  function () {
    try {

        if (onloadcallBack && typeof (onloadcallBack) == " function") {              
            onloadcallBack();
        } else {

        }
    } catch (e) {
    }


};
window.onscroll =  function () {
    var goTop = document.getElementById('goTop');

    if (goTop != null) {
        if (document.documentElement.scrollTop + document.body.scrollTop > 0) {
            goTop.style.display = "block";
        } else {
            goTop.style.display = "none";
        }
    }

}