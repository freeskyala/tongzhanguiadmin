<div class='table_list'>
<style>
    .m-form_float .select_model_select{
        margin-top: 1px;
        padding-right: 15px;
        width: 100px;
    }
</style>
    <form name='' action='/sysLogQueue-index.php'   method='post'>
        <div class='m-form m-form_float'>
            <input type="hidden"  name="page" class="pageInput" value='1' />

                <div class='formitm'>
                    <div class='ipt'>
                        <input type='text' onClick='WdatePicker({position:{top:10}})' name='startTime' value='2017-02-14' class='u-ipt hover select-date'/>
                    </div>
                </div>
               <div class='formitm'>
                    <div class='ipt'>
                        <input type='text' onClick='WdatePicker({position:{top:10}})' name='endTime' value='2017-02-20'  class='u-ipt hover'/>
                    </div>
                </div>

                <div class='formitm' style='width: 112px;'>
                    <div class='ipt'>
                        <span class='u-ipt select select_model_select'>
                            <span class='input_select_div'>
                                <span class="input_select_tag_one nosubmit">
                                </span>
                            </span>

                            <ul class='dropdown_menu' name='appFag'>
                                                                <li class='dropdown_menu_li hover selected'   val='0'><a>select</a></li>
                                                                <li class='dropdown_menu_li hover'   val='1'><a>sys</a></li>
                                                                <li class='dropdown_menu_li hover'   val='4'><a>admin</a></li>
                                                                <li class='dropdown_menu_li hover'   val='5'><a>admintask</a></li>
                                                                <li class='dropdown_menu_li hover'   val='6'><a>adminblog</a></li>
                                                                <li class='dropdown_menu_li hover'   val='7'><a>adminshop</a></li>
                                                                <li class='dropdown_menu_li hover'   val='8'><a>frontblog</a></li>
                                                            </ul>
                            <i class='fa fa-angle-down'></i>
                        </span>
                    </div>
                </div>

                <div class='formitm'>
                    <button type='button' class='btn-info hover btn sbumit'>搜索</button>
                </div>
               <div class='formitm operaiton' style='padding-top: 6px;'>
               </div>
        </div>
         <table >
            <tbody>
                <tr>
                                        <th width='10'>
                        <span class='check_box_all check_box_unselect f-f18'>
                            <i class='fa fa-square-o'></i>
                        </span>
                    </th>
                    <th>id</th>
                    <th>queueId</th>
                    <th>appFag</th>
                    <th>retText</th>
                    <th>title</th>
                    <th>runTime</th>
                    <th>insertTime</th>
                    <th>updateTime</th>
                    <th>操作</th>
                    
                </tr>
                                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2064]' value='2064' /></i>
                        </span>
                    </td>
                    <td>2064</td>
                    <td>1487228018256</td>
                    <td>sys</td>
                    <td>处理成功</td>
                    <td>收集应用错误日志</td>
                    <td>49</td>
                    <td>2017-02-16 14:53:38</td>
                    <td>2017-02-16 14:53:38</td>
                    <td>
                        <a title='队列详情' data='2064' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2063]' value='2063' /></i>
                        </span>
                    </td>
                    <td>2063</td>
                    <td>1487228018114</td>
                    <td>sys</td>
                    <td>处理成功</td>
                    <td>收集系统错误日志</td>
                    <td>52</td>
                    <td>2017-02-16 14:53:38</td>
                    <td>2017-02-16 14:53:38</td>
                    <td>
                        <a title='队列详情' data='2063' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2062]' value='2062' /></i>
                        </span>
                    </td>
                    <td>2062</td>
                    <td>1487228010279</td>
                    <td>sys</td>
                    <td>处理成功</td>
                    <td>收集应用错误日志</td>
                    <td>78</td>
                    <td>2017-02-16 14:53:30</td>
                    <td>2017-02-16 14:53:30</td>
                    <td>
                        <a title='队列详情' data='2062' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2061]' value='2061' /></i>
                        </span>
                    </td>
                    <td>2061</td>
                    <td>1487228010066</td>
                    <td>sys</td>
                    <td>处理成功</td>
                    <td>收集系统错误日志</td>
                    <td>57</td>
                    <td>2017-02-16 14:53:30</td>
                    <td>2017-02-16 14:53:30</td>
                    <td>
                        <a title='队列详情' data='2061' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2060]' value='2060' /></i>
                        </span>
                    </td>
                    <td>2060</td>
                    <td>1487207890468</td>
                    <td>sys</td>
                    <td>处理成功</td>
                    <td>收集应用错误日志</td>
                    <td>60</td>
                    <td>2017-02-16 09:18:10</td>
                    <td>2017-02-16 09:18:10</td>
                    <td>
                        <a title='队列详情' data='2060' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2059]' value='2059' /></i>
                        </span>
                    </td>
                    <td>2059</td>
                    <td>1487207890328</td>
                    <td>sys</td>
                    <td>处理成功</td>
                    <td>收集系统错误日志</td>
                    <td>44</td>
                    <td>2017-02-16 09:18:10</td>
                    <td>2017-02-16 09:18:10</td>
                    <td>
                        <a title='队列详情' data='2059' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2058]' value='2058' /></i>
                        </span>
                    </td>
                    <td>2058</td>
                    <td>1487207699198</td>
                    <td>sys</td>
                    <td>处理成功</td>
                    <td>收集应用错误日志</td>
                    <td>44</td>
                    <td>2017-02-16 09:14:58</td>
                    <td>2017-02-16 09:14:59</td>
                    <td>
                        <a title='队列详情' data='2058' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2057]' value='2057' /></i>
                        </span>
                    </td>
                    <td>2057</td>
                    <td>1487207699026</td>
                    <td>sys</td>
                    <td>处理成功</td>
                    <td>收集系统错误日志</td>
                    <td>65</td>
                    <td>2017-02-16 09:14:58</td>
                    <td>2017-02-16 09:14:59</td>
                    <td>
                        <a title='队列详情' data='2057' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2056]' value='2056' /></i>
                        </span>
                    </td>
                    <td>2056</td>
                    <td>1487207601242</td>
                    <td>sys</td>
                    <td>正在处理</td>
                    <td>blogCollectArticle</td>
                    <td>1</td>
                    <td>2017-02-16 09:13:20</td>
                    <td>2017-02-16 09:14:52</td>
                    <td>
                        <a title='队列详情' data='2056' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[2055]' value='2055' /></i>
                        </span>
                    </td>
                    <td>2055</td>
                    <td>1487207600657</td>
                    <td>sys</td>
                    <td>正在处理</td>
                    <td>blogCollectArticle</td>
                    <td>1</td>
                    <td>2017-02-16 09:13:20</td>
                    <td>2017-02-16 09:14:52</td>
                    <td>
                        <a title='队列详情' data='2055' class='operation a_alert' href='/sysLogQueue-detail.php'>详情</a>
                    </td>
                </tr>
                
                
            </tbody>
        </table>
                <div class='page'>
            <a href="#" class="disabled" >一共145条</a><a href="#" class="disabled edit-a-pageSize" >每页<input type="text" class="edit-pageSize" name="pageSize" size="2" maxlength="2"  value="10" />条</a><a class="a_hover" href="#" page="1">1</a><a class="" href="#" page="2">2</a><a class="" href="#" page="3">3</a><a class="" href="#" page="4">4</a><a class="" href="#" page="5">5</a><a class="" href="#" page="6">6</a><a class="" href="#" page="7">7</a><a class="" href="#" page="8">8</a><a class="" href="#" page="9">9</a><a class="" href="#" page="10">10</a><a href="#" page="2" class=" nextPage">下一页</a><a href="#" page="15" class=" lastPage">最后一页</a>        </div>
            </form>
</div>
<script>
 $(document).ready(function () {
     $('.select .dropdown_menu .selected').trigger("click");
     $('.dropdown_menu').hide();
 });
</script>