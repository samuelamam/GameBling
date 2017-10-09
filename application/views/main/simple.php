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
        <link rel="stylesheet" href="/resources/plugins/mmGrid-master/mmGrid.css" id="main-ace-style"/>
        <link rel="stylesheet" href="/resources/plugins/mmGrid-master/theme/bootstrap/mmGrid-bootstrap.css" id="main-ace-style"/>
        <link rel="stylesheet" href="/resources/plugins/mmGrid-master/mmPaginator.css" id="main-ace-style"/>
        <link rel="stylesheet" href="/resources/plugins/mmGrid-master/theme/bootstrap/mmPaginator-bootstrap.css" id="main-ace-style"/>
    </head>
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
                                    <a href="#"><i class="fa fa-ban fa-fw pull-right"></i> 退出登录</a>
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
                    <section class="content">
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
                                    <header class="panel-heading" style="text-align:center;">
                                        testtest
                                    </header>
                                    <div class="panel-body col-xs-12 col-lg-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>名称</th>
                                                    <th>城市</th>
                                                    <th>邮编</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanmay</td>
                                                    <td>Bangalore</td>
                                                    <td>560001</td>
                                                </tr>
                                                <tr>
                                                    <td>Sachin</td>
                                                    <td>Mumbai</td>
                                                    <td>400003</td>
                                                </tr>
                                                <tr>
                                                    <td>Uma</td>
                                                    <td>Pune</td>
                                                    <td>411027</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /.panel-body -->
                                    <div class="panel-body col-xs-12 col-lg-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>名称</th>
                                                    <th>城市</th>
                                                    <th>邮编</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tanmay</td>
                                                    <td>Bangalore</td>
                                                    <td>560001</td>
                                                </tr>
                                                <tr>
                                                    <td>Sachin</td>
                                                    <td>Mumbai</td>
                                                    <td>400003</td>
                                                </tr>
                                                <tr>
                                                    <td>Uma</td>
                                                    <td>Pune</td>
                                                    <td>411027</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /.panel-body -->
                                    <div class="panel-body col-xs-12 col-lg-4">
                                        <table class="table table-bordered" id="table3">
                                        </table>
                                    </div><!-- /.panel-body -->

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

        <script src="/resources/plugins/mmGrid-master/mmGrid.js"></script>
        <script src="/resources/plugins/mmGrid-master/mmPaginator.js"></script>
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
                $.post("index/Index/search_data",function(result){
                //   var result = eval('(' + result + ')');
                make_table(result)
                });
            });

            function make_table(result){
                // var html_str1 = "";
                // var html_str2 = "";
                var html_str3 = "";

                //   // 总报修表格说明
                // html_str1 += '';
                // html_str1 += '<tr>';
                // html_str1 += '<th>月份/月</th>';
                // html_str1 += '<th>报修数量/台</th>';
                // html_str1 += '</tr>';
                // for (var i in result.time) {
                //     html_str1 += '<tr>';
                //     html_str1 += '<td>'+result.time[i]+'</td>';
                //     html_str1 += '<td>'+result.data[i]+'</td>';
                //     html_str1 += '</tr>';
                //   }

                // html_str2 += '';
                // html_str2 += '<tr>';
                // html_str2 += '<th>月份/月</th>';
                // html_str2 += '<th>报修数量/台</th>';
                // html_str2 += '</tr>';
                // for (var i in result.time) {
                //     html_str2 += '<tr>';
                //     html_str2 += '<td>'+result.time[i]+'</td>';
                //     html_str2 += '<td>'+result.data[i]+'</td>';
                //     html_str2 += '</tr>';
                // }

                html_str3 += '';
                html_str3 += '<thead>';
                html_str3 += '<tr>';
                html_str3 += '<th>名称</th>';
                html_str3 += '<th>城市</th>';
                html_str3 += '<th>邮编</th>';
                html_str3 += '</tr>';
                html_str3 += '</thead>';
                html_str3 += '<tbody>';
                // for (var i in result.time) {
                    html_str3 += '<tr>';
                    html_str3 += '<td>Tnmay</td>';
                    html_str3 += '<td>Bangalore</td>';
                    html_str3 += '<td>560001</td>';
                    html_str3 += '</tr>';
                // }
                html_str3 += '</tbody>';

                // $('#table1').html(html_str1);
                // $('#table2').html(html_str2);
                $('#table3').html(html_str3);
            }

        </script>
    </body>
</html>
