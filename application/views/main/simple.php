<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>投注站</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Developed By M Abdur Rokib Promy">
        <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
        <!-- bootstrap 3.0.2 -->
        <link href="/application/views/main/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/resources/assets/css/jquery-ui.custom.min.css"/>
        <!-- font Awesome -->
        <link href="/application/views/main/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/application/views/main/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- google font -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> -->
        <!-- Theme style -->
        <link href="/application/views/main/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <style>
        .input-group-addon {
            width: 10px;
        }
        ..panel-heading{
            background-color:#ffffff;
        }
    </style>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                VIP中心
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="<?=base_url('index/login/index')?>">
                                <i class="fa fa-fw fa-sign-out"></i>退出登录
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/application/views/main/img/26115.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>您好  <?php print_r($_SESSION['index_user']) ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>彩票大厅</span>
                            </a>
                        </li>
                        <li>
                            <a herf="#" id="Xiad" style="cursor:pointer">
                                <i class="fa fa-gavel"></i> <span>下单信息</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-globe"></i> <span>开奖信息</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
                <aside class="right-side">

                    <!-- Main content -->
                    <section class="content" style="BACKGROUND: #ffffff;">
                        <div class="row">
                            <div class="col-xs-12 col-lg-12">
                                <div class="panel">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="active"><a href="#">六合彩</a></li>
                                        <li class="disabled"><a href="#">七星彩</a></li>
                                        <li class="disabled"><a href="#">赛车</a></li>
                                        <li class="disabled"><a href="#">赛马</a></li>
                                        <li class="disabled"><a href="#">足球</a></li>
                                        <li class="disabled"><a href="#">拳击</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                                    
                            <div class="col-xs-12 col-lg-9" style="border-right:1px dashed #8e8a8a">
                                <div class="col-xs-12 col-lg-12" style="text-align:center;">
                                    <header class="panel-heading" style="background:#f5d67e">
                                        特别码--特码A
                                    </header>
                                    <div class="panel-body col-xs-12 col-lg-4">
                                        <table class="table table-bordered" id="table1">
                                        </table>
                                    </div>
                                    <div class="panel-body col-xs-12 col-lg-4">
                                        <table class="table table-bordered" id="table2">
                                        </table>
                                    </div>
                                    <div class="panel-body col-xs-12 col-lg-4">
                                        <table class="table table-bordered" id="table3">
                                        </table>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-12" style="text-align:center;">
                                    <div class="panel-body col-xs-12 col-lg-4">
                                        <table class="table table-bordered" id="table4">
                                        </table>
                                    </div>
                                    <div class="panel-body col-xs-12 col-lg-4">
                                        <table class="table table-bordered" id="table5">
                                        </table>
                                    </div>
                                    <div class="panel-body col-xs-12 col-lg-4">
                                        <table class="table table-bordered" id="table6">
                                        </table>
                                    </div>
                                </div>
                                <div class="panel-body col-xs-12 col-lg-12" style="text-align:center;">
                                    <button class="btn btn-danger" type="button" id="xiazhu"">
                                        <i class="ace-icon fa  fa-search  bigger-110"></i>
                                        <span class="bigger-110 no-text-shadow" onclick="xiazhu();">下注</span>
                                    </button>
                                    <button class="btn btn-danger" type="button">
                                        <i class="ace-icon fa  fa-search  bigger-110"></i>
                                        <span class="bigger-110 no-text-shadow">清空</span>
                                    </button>
                                </div>
                            </div>
                                <div class="col-xs-12 col-lg-3">
                                    <div class="col-xs-12 col-lg-12">
                                        <header class="panel-heading" style="text-align:center;background:#f5d67e">
                                            快填栏
                                        </header>
                                    </div>
                                    <div class="panel-body col-xs-12 col-lg-12" style="text-align: center;">
                                        <table class="table table-bordered" id="">
                                        <thead>
                                        <tr>
                                        <th style="text-align: center;width:15%">类型</th>
                                        <th style="text-align: center;width:15%">金额</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>
                                                <select class="form-control">
                                                    <option value="红波">红波</option>
                                                    <option value="单">绿波</option>
                                                    <option value="双">蓝波</option>
                                                    <option value="尾大">尾大</option>
                                                    <option value="尾小">尾小</option>
                                                    <option value="鼠">鼠</option>
                                                    <option value="兔">兔</option>
                                                    <option value="马">马</option>
                                                    <option value="鸡">鸡</option>
                                                    <option value="野兽">野兽</option>
                                                    <option value="1尾">1尾</option>
                                                    <option value="4尾">4尾</option>
                                                    <option value="7尾">7尾</option>
                                                    <option value="红单">红单</option>
                                                    <option value="红双">红双</option>
                                                    <option value="红大">红大</option>
                                                    <option value="红小">红小</option>
                                                    <option value="头单">头单</option>
                                                    <option value="1头">1头</option>
                                                    <option value="绿波">绿波</option>
                                                    <option value="大">大</option>
                                                    <option value="小">小</option>
                                                    <option value="大单">大单</option>
                                                    <option value="小单">小单</option>
                                                    <option value="牛">牛</option>
                                                    <option value="龙">龙</option>
                                                    <option value="羊">羊</option>
                                                    <option value="狗">狗</option>
                                                    <option value="家禽">家禽</option>
                                                    <option value="2尾">2尾</option>
                                                    <option value="5尾">5尾</option>
                                                    <option value="8尾">8尾</option>
                                                    <option value="绿单">绿单</option>
                                                    <option value="绿双">绿双</option>
                                                    <option value="绿大">绿大</option>
                                                    <option value="绿小">绿小</option>
                                                    <option value="头双">头双</option>
                                                    <option value="2头">2头</option>
                                                    <option value="蓝波">蓝波</option>
                                                    <option value="合单">合单</option>
                                                    <option value="合双">合双</option>
                                                    <option value="大双">大双</option>
                                                    <option value="小双">小双</option>
                                                    <option value="虎">虎</option>
                                                    <option value="蛇">蛇</option>
                                                    <option value="猴">猴</option>
                                                    <option value="猪">猪</option>
                                                    <option value="0尾">0尾</option>
                                                    <option value="3尾">3尾</option>
                                                    <option value="6尾">6尾</option>
                                                    <option value="9尾">9尾</option>
                                                    <option value="蓝单">蓝单</option>
                                                    <option value="蓝双">蓝双</option>
                                                    <option value="蓝大">蓝大</option>
                                                    <option value="蓝小">蓝小</option>
                                                    <option value="0头">0头</option>
                                                    <option value="3头">3头</option>
                                                    <option value="4头">4头</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <td colspan="2">
                                                    单注最低：1<br />
                                                    单注最高：30,000<br />
                                                    单项（号）限额：300,000
                                            </td>
                                        </tbody>
                                        <tbody>
                                            <td colspan="2">
                                                <button class="btn btn-danger" type="button" id="search">
                                                    <i class="ace-icon fa  fa-search  bigger-110"></i>
                                                    <span class="bigger-110 no-text-shadow">下注</span>
                                                </button>
                                            </td>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="col-xs-12 col-lg-12">
                                        <header class="panel-heading" style="text-align:center;background:#f5d67e">
                                            快速投注--特码A下注单
                                        </header>
                                    </div>
                                    <div class="panel-body col-xs-12 col-lg-12" style="text-align: center;">
                                        <table class="table table-bordered" id="">
                                        <thead>
                                        <tr>
                                        <th style="text-align: center;width:15%">类型</th>
                                        <th style="text-align: center;width:15%">金额</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>
                                                <select class="form-control">
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="单">单</option>
                                                    <option value="双">双</option>
                                                    <option value="大">大</option>
                                                    <option value="小">小</option>
                                                    <option value="合单">合单</option>
                                                    <option value="合双">合双</option>
                                                    <option value="红波">红波</option>
                                                    <option value="红大">红大</option>
                                                    <option value="红小">红小</option>
                                                    <option value="红单">红单</option>
                                                    <option value="红双">红双</option>
                                                    <option value="绿波">绿波</option>
                                                    <option value="绿大">绿大</option>
                                                    <option value="绿小">绿小</option>
                                                    <option value="绿单">绿单</option>
                                                    <option value="绿双">绿双</option>
                                                    <option value="蓝波">蓝波</option>
                                                    <option value="蓝大">蓝大</option>
                                                    <option value="蓝小">蓝小</option>
                                                    <option value="蓝单">蓝单</option>
                                                    <option value="蓝双">蓝双</option>
                                                    <option value="鼠">鼠</option>
                                                    <option value="牛">牛</option>
                                                    <option value="虎">虎</option>
                                                    <option value="兔">兔</option>
                                                    <option value="龙">龙</option>
                                                    <option value="马">马</option>
                                                    <option value="羊">羊</option>
                                                    <option value="猴">猴</option>
                                                    <option value="鸡">鸡</option>
                                                    <option value="狗">狗</option>
                                                    <option value="猪">猪</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <td colspan="2">
                                                    单注最低：1<br />
                                                    单注最高：30,000<br />
                                                    单项（号）限额：300,000
                                            </td>
                                        </tbody>
                                        <tbody>
                                            <td colspan="2">
                                                <button class="btn btn-danger" type="button" id="search">
                                                    <i class="ace-icon fa  fa-search  bigger-110"></i>
                                                    <span class="bigger-110 no-text-shadow">下注</span>
                                                </button>
                                            </td>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </section><!-- /.content -->
                    <div class="footer-main">
                        Copyright &copy Director, 2014
                    </div>
                </aside><!-- /.right-side -->
            </div><!-- ./wrapper -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
        <script src="/application/views/main/js/jquery.min.js" type="text/javascript"></script>
        <script src="/resources/assets/js/jquery-ui.min.js"></script>
        <!-- Bootstrap -->
        <script src="/application/views/main/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Director App -->
        <script src="/application/views/main/js/Director/app.js" type="text/javascript"></script>

        <script src="/resources/assets/js/jquery.validate.min.js"></script>
        <script src="/resources/plugins/input/input.js"></script>
        <script src="/resources/plugins/bootstrap-dialog/js/bootstrap-dialog.js"></script>
        <script src="/resources/common/js/common.js"></script>
        <script src="/resources/assets/js/chosen.jquery.min.js"></script>
        <script src="/resources/plugins/form.js"></script>
        <script src="/resources/plugins/jquery.form.js"></script>
        <script src="/resources/assets/js/typeahead.jquery.min.js"></script>

        <script>
            $(".disabled").click(function (event) {
                event.preventDefault();
            });

            // href="/index/personal/personal"
            $("#Xiad").click(function(){
                self.location='/index/personal/personal'; 
            });

            $(function() { 
                // 图形与表格实例化
                $.post("Simple_contr/search_d",function(result){
                    var result = eval('(' + result + ')');
                    console.log(result);
                    make_table(result)
                });
            });

            function make_table(result){
                var html_str1 = "";
                var html_str2 = "";
                var html_str3 = "";
                var html_str4 = "";
                var html_str5 = "";
                var html_str6 = "";

                html_str1 += '';
                html_str1 += '<thead>';
                html_str1 += '<tr>';
                html_str1 += '<th style="text-align: center;width:10%">号码</th>';
                html_str1 += '<th style="text-align: center;width:10%">赔率</th>';
                html_str1 += '<th style="text-align: center;width:15%">金额</th>';
                html_str1 += '</tr>';
                html_str1 += '</thead>';
                html_str1 += '<tbody>';
                for (var i = 0; i < 17; i++) {
                    html_str1 += '<tr>';
                    html_str1 += '<td><img src="/resources/images/'+result.value[i]+'.png"></td>';
                    // html_str1 += '<td>'+result.value[i]+'</td>';
                    html_str1 += '<td style="color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str1 += '<td><input type="text" class="form-control" number='+result.value[i]+'></td>';
                    html_str1 += '</tr>';
                }

                html_str2 += '';
                html_str2 += '<thead>';
                html_str2 += '<tr>';
                html_str2 += '<th style="text-align: center;width:15%">号码</th>';
                html_str2 += '<th style="text-align: center;width:15%">赔率</th>';
                html_str2 += '<th style="text-align: center;width:15%">金额</th>';
                html_str2 += '</tr>';
                html_str2 += '</thead>';
                html_str2 += '<tbody>';
                for (var i = 17; i <33 ; i++) {
                    html_str2 += '<tr>';
                    html_str2 += '<td><img src="/resources/images/'+result.value[i]+'.png"></td>';
                    // html_str2 += '<td>'+result.value[i]+'</td>';
                    html_str2 += '<td style="color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str2 += '<td><input type="text" class="form-control" number='+result.value[i]+'></td>';
                    html_str2 += '</tr>';
                }

                html_str3 += '';
                html_str3 += '<thead>';
                html_str3 += '<tr>';
                html_str3 += '<th style="text-align: center;width:15%">号码</th>';
                html_str3 += '<th style="text-align: center;width:15%">赔率</th>';
                html_str3 += '<th style="text-align: center;width:15%">金额</th>';
                html_str3 += '</tr>';
                html_str3 += '</thead>';
                html_str3 += '<tbody>';
                for (var i = 33; i < 49; i++) {
                    html_str3 += '<tr>';
                    html_str3 += '<td><img src="/resources/images/'+result.value[i]+'.png"></td>';
                    // html_str3 += '<td>'+result.value[i]+'</td>';
                    html_str3 += '<td style="color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str3 += '<td><input type="text" class="form-control" number='+result.value[i]+'></td>';
                    html_str3 += '</tr>';
                }
                html_str3 += '</tbody>';

                html_str4 += '';
                html_str4 += '<tbody>';
                for (var i = 49; i < 55; i++) {
                    html_str4 += '<tr>';
                    html_str4 += '<td style="text-align: center;width:15%;line-height:30px">'+result.value[i]+'</td>';
                    html_str4 += '<td style="text-align: center;width:15%;color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str4 += '<td style="text-align: center;width:15%"><input type="text" class="form-control" number='+result.value[i]+'></td>';
                    html_str4 += '</tr>';
                }
                html_str4 += '</tbody>';

                html_str5 += '';
                html_str5 += '<tbody>';
                for (var i = 55; i < 60; i++) {
                    html_str5 += '<tr>';
                    html_str5 += '<td style="text-align: center;width:15%;line-height:30px">'+result.value[i]+'</td>';
                    html_str5 += '<td style="text-align: center;width:15%;color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str5 += '<td style="text-align: center;width:15%"><input type="text" class="form-control" number='+result.value[i]+'></td>';
                    html_str5 += '</tr>';
                }
                html_str5 += '</tbody>';

                html_str6 += '';
                html_str6 += '<tbody>';
                for (var i = 60; i < 65; i++) {
                    html_str6 += '<tr>';
                    html_str6 += '<td style="text-align: center;width:15%;line-height:30px">'+result.value[i]+'</td>';
                    html_str6 += '<td style="text-align: center;width:15%;color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str6 += '<td style="text-align: center;width:15%"><input type="text" class="form-control" number='+result.value[i]+'></td>';
                    html_str6 += '</tr>';
                }
                html_str6 += '</tbody>';

                $('#table1').html(html_str1);
                $('#table2').html(html_str2);
                $('#table3').html(html_str3);
                $('#table4').html(html_str4);
                $('#table5').html(html_str5);
                $('#table6').html(html_str6);
            }

        function xiazhu() {
            var data = new Array;
            var i = 0;
            $("input[type='text']").each(function () {
                if ($(this).val() != '') {
                    data[i] = {
                        value : $(this).attr('number'),
                        price : $(this).val()
                    }
                    i++;
                }
            });
            data = JSON.stringify(data);
            $.post('index/test', {data:data}, function () {
                // body...
            });
        }
            

        </script>
    </body>
</html>
