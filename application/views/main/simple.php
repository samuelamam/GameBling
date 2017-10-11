<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Director | Simple Tables</title>
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
    <style>
        ._blue{
            background: -webkit-linear-gradient(#a05459, #4c151c); /* Safari 5.1 - 6.0 */
            background: -o-linear-gradient(#a05459, #4c151c); /* Opera 11.1 - 12.0 */
            background: -moz-linear-gradient(#a05459, #4c151c); /* Firefox 3.6 - 15 */
            background: linear-gradient(#a05459, #4c151c); /* 标准的语法 */
            box-shadow: 0px 1px 8px #fff inset;
        }
        ._box-wrap{
            width: 100px;
            height: 100px;
            position: relative;
            border-radius: 50%;
        }
        ._box-wrap ._box-number{
            width: 70px;
            height: 70px;
            line-height: 70px;
            position: absolute;
            background: #fff;
            top: 50%;
            left: 50%;
            margin-left: -35px;
            margin-top: -35px;
            text-align: center;
            border-radius: 50%;
            
        }
        ._box-wrap ._box-number span{
            font-size: 34px;
            color: #000;
            font-weight: bold;
        }
    </style>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <!-- VIP中心 -->
                test
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="divider"></li>
                                    <li>
                                        <a data-toggle="modal" href="#modal-user-settings">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                            下单信息
                                        </a>
                                    </li>
                                <li>
                                    <a href="<?=base_url('index/login/index')?>" id="logout"><i class="fa fa-ban fa-fw pull-right"></i> 退出登录</a>
                                </li>
                            </ul>
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
                            <p>您好，贵宾</p>

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
                                <i class="fa fa-dashboard"></i> <span>test</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-gavel"></i> <span>test</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-globe"></i> <span>test</span>
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
                            <div class="col-md-12 col-xs-12">
                                <div class="panel">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="active"><a href="#">六test</a></li>
                                        <li class="disabled"><a href="#">test</a></li>
                                        <li class="disabled"><a href="#">test</a></li>
                                        <li class="disabled"><a href="#">test</a></li>
                                        <li class="disabled"><a href="#">test</a></li>
                                        <li class="disabled"><a href="#">test</a></li>
                                    </ul>
                                </div>
                            
                                    
                                
                                <div class="col-xs-12 col-lg-9" style="text-align:center;">
                                    <header class="panel-heading" style="background:#f5d67e">
                                        testtest
                                    </header>
                                <div class="row">
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
                                <div class="row">
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
                                    <button class="btn btn-danger" type="button" id="search"">
                                        <i class="ace-icon fa  fa-search  bigger-110"></i>
                                        <span class="bigger-110 no-text-shadow">查询</span>
                                    </button>
                                    <button class="btn btn-danger" type="button" id="search"">
                                        <i class="ace-icon fa  fa-search  bigger-110"></i>
                                        <span class="bigger-110 no-text-shadow">重置</span>
                                    </button>
                                </div>
                                <div class="col-xs-12 col-lg-3">
                                    <div class="col-xs-12 col-lg-12">
                                        <header class="panel-heading" style="text-align:center;background:#f5d67e">
                                            快速
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            </tr>
                                        </tbody>
                                            <td colspan="2">
                                                <button class="btn btn-danger" type="button" id="search">
                                                    <i class="ace-icon fa  fa-search  bigger-110"></i>
                                                    <span class="bigger-110 no-text-shadow">查询</span>
                                                </button>
                                            </td>
                                        </table>
                                    </div>
                                    <div class="col-xs-12 col-lg-12">
                                        <header class="panel-heading" style="text-align:center;background:#f5d67e">
                                            快速
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            </tr>
                                        </tbody>
                                            <td colspan="2">
                                                <button class="btn btn-danger" type="button" id="search">
                                                    <i class="ace-icon fa  fa-search  bigger-110"></i>
                                                    <span class="bigger-110 no-text-shadow">查询</span>
                                                </button>
                                            </td>
                                        </table>
                                    </div>
                                </div>
                                </div><!-- /.panel -->
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
                html_str1 += '<th style="text-align: center;width:10%">test</th>';
                html_str1 += '<th style="text-align: center;width:10%">test</th>';
                html_str1 += '<th style="text-align: center;width:15%">stest</th>';
                html_str1 += '</tr>';
                html_str1 += '</thead>';
                html_str1 += '<tbody>';
                for (var i = 0; i < 17; i++) {
                    html_str1 += '<tr>';
                    // html_str1 += '<td style="line-height:30px"><img src="/resources/images/'+result.value[i]+'.png"></td>';
                    html_str1 += '<td>'+result.value[i]+'</td>';
                    html_str1 += '<td style="color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str1 += '<td><input type="text" class="form-control"></td>';
                    html_str1 += '</tr>';
                }

                html_str2 += '';
                html_str2 += '<thead>';
                html_str2 += '<tr>';
                html_str2 += '<th style="text-align: center;width:15%">test</th>';
                html_str2 += '<th style="text-align: center;width:15%">ste</th>';
                html_str2 += '<th style="text-align: center;width:15%">tase</th>';
                html_str2 += '</tr>';
                html_str2 += '</thead>';
                html_str2 += '<tbody>';
                for (var i = 17; i <33 ; i++) {
                    html_str2 += '<tr>';
                    html_str2 += '<td>'+result.value[i]+'</td>';
                    html_str2 += '<td style="color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str2 += '<td><input type="text" class="form-control"></td>';
                    html_str2 += '</tr>';
                }

                html_str3 += '';
                html_str3 += '<thead>';
                html_str3 += '<tr>';
                html_str3 += '<th style="text-align: center;width:15%">test</th>';
                html_str3 += '<th style="text-align: center;width:15%">taes</th>';
                html_str3 += '<th style="text-align: center;width:15%">aste</th>';
                html_str3 += '</tr>';
                html_str3 += '</thead>';
                html_str3 += '<tbody>';
                for (var i = 33; i < 49; i++) {
                    html_str3 += '<tr>';
                    html_str3 += '<td>'+result.value[i]+'</td>';
                    html_str3 += '<td style="color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str3 += '<td><input type="text" class="form-control"></td>';
                    html_str3 += '</tr>';
                }
                html_str3 += '</tbody>';

                html_str4 += '';
                html_str4 += '<tbody>';
                for (var i = 49; i < 55; i++) {
                    html_str4 += '<tr>';
                    html_str4 += '<td style="text-align: center;width:15%;line-height:30px">'+result.value[i]+'</td>';
                    html_str4 += '<td style="text-align: center;width:15%;color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str4 += '<td style="text-align: center;width:15%"><input type="text" class="form-control"></td>';
                    html_str4 += '</tr>';
                }
                html_str4 += '</tbody>';

                html_str5 += '';
                html_str5 += '<tbody>';
                for (var i = 55; i < 60; i++) {
                    html_str5 += '<tr>';
                    html_str5 += '<td style="text-align: center;width:15%;line-height:30px">'+result.value[i]+'</td>';
                    html_str5 += '<td style="text-align: center;width:15%;color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str5 += '<td style="text-align: center;width:15%"><input type="text" class="form-control"></td>';
                    html_str5 += '</tr>';
                }
                html_str5 += '</tbody>';

                html_str6 += '';
                html_str6 += '<tbody>';
                for (var i = 60; i < 65; i++) {
                    html_str6 += '<tr>';
                    html_str6 += '<td style="text-align: center;width:15%;line-height:30px">'+result.value[i]+'</td>';
                    html_str6 += '<td style="text-align: center;width:15%;color:red;line-height:30px"><strong>'+result.price[i]+'</strong></td>';
                    html_str6 += '<td style="text-align: center;width:15%"><input type="text" class="form-control"></td>';
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

        </script>
    </body>
</html>
