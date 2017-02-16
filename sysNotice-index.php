<div class='table_list'>
    <form name='' action='/sysNotice-index.php'   method='post'>
        <div class='m-form m-form_float'>
            <input type="hidden"  name="page" class="pageInput" value='1' />
                <div class='formitm'>
                    <div class='ipt'>
                        <input type='text' placeholder='title' name='search' value='' class='u-ipt hover'/>
                    </div>
                </div>


                <div class='formitm'>
                    <button type='button' class='btn-info hover btn sbumit'>搜索</button>
                </div>
               <div class='formitm operaiton'>
                    <button type='button' title='新增' action='/sysNotice-append.php' class='btn-info hover btn append-btn'>新增</button>
                    <button type='button' action='/sysNotice-show.php?status=1' class='btn-info hover btn warning opera-btn'>显示</button>
                    <button type='button' action='/sysNotice-show.php?status=0' class='btn-primary hover btn warning opera-btn'>隐藏</button>

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
                    <th>title</th>
                    <th>isShow</th>
                    <th>insertTime</th>
                    <th>updateTime</th>
                    <th>操作</th>
                                    </tr>
                                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[61]' value='61' /></i>
                        </span>
                    </td>
                    <td>61</td>
                    <td>aaa</td>
                    <td>隐藏</td>
                    <td>2016-11-25 09:22:25</td>
                    <td>2016-11-25 09:22:25</td>
                    <td>
                        <a title='编辑' data='61' class='operation a_alert' href='/sysNotice-append.php'>编辑</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <span class='check_box_unselect check_box f-f18'>
                            <i class='fa fa-square-o'><input type='checkbox' class='checkbox' style='display: none;' name='data[60]' value='60' /></i>
                        </span>
                    </td>
                    <td>60</td>
                    <td>title</td>
                    <td>显示</td>
                    <td>2016-11-25 09:09:52</td>
                    <td>2016-11-25 09:13:37</td>
                    <td>
                        <a title='编辑' data='60' class='operation a_alert' href='/sysNotice-append.php'>编辑</a>
                    </td>
                </tr>
                
                
            </tbody>
        </table>
                <div class='page'>
                    </div>
            </form>
</div>
