<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>下单信息</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Deveromy">
        <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
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
        <link href="/application/views/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="/application/views/admin/css/sb-admin.css" rel="stylesheet">
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
                            <a href="#" id="Fanhui" style="cursor:pointer">
                                <i class="fa fa-dashboard"></i> <span>返回大厅</span>
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
                        <div class="container-fluid">
                          <!-- Breadcrumbs-->
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                              <a href="index.html">订单记录</a>
                            </li>
                            <li class="breadcrumb-item active">列表</li>
                          </ol>
                          <div class="card mb-3">
                            <div class="card-header">
                              <!-- <i class="fa fa-table"></i> 订单记录</div> -->
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>用户名</th>
                                      <!-- <th>组合</th> -->
                                      <th>购买号码</th>
                                      <th>下单金额（元）</th>
                                      <th>时间</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php if (!empty($orderarray)):?>
                                    <?php foreach ($orderarray as $v):?>
                                    <tr>
                                      <td><?=$v['user']?></td>
                                      <!-- <td><?=BUYTYPE[$v['buy_type']]?></td> -->
                                      <td><?=$v['buy_number']?></td>
                                      <td>￥<?=$v['price']?></td>
                                      <td><?=$v['time']?></td>
                                    </tr>
                                  <?php endforeach; ?>
                                  <?php endif; ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section><!-- /.content -->
                    <div class="footer-main">
                        Copyright &copy Director, 2014
                    </div>
                </aside><!-- /.right-side -->
            </div><!-- ./wrapper -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
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
        <!-- Custom scripts for all pages-->
        <script src="/application/views/admin/js/sb-admin.min.js"></script>
        <script src="/application/views/admin/js/sb-admin-datatables.min.js"></script>
        <script src="/application/views/admin/vendor/datatables/jquery.dataTables.js"></script>


        <!-- Bootstrap core JavaScript-->
        <script src="/application/views/admin/vendor/popper/popper.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="/application/views/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="/application/views/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="/application/views/admin/js/sb-admin.min.js"></script>
        <script src="/application/views/admin/js/sb-admin-datatables.min.js"></script>


        <script type="text/javascript">
          $('#dataTable').DataTable({
            language : {
              "search": "在表格中搜索:",
              "sProcessing": "处理中...",
              "sLengthMenu": "显示 _MENU_ 项结果",
              "sZeroRecords": "没有匹配结果",
              "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
              "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
              "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
              "sInfoPostFix": "",
              "sSearch": "搜索:",
              "sUrl": "",
              "sEmptyTable": "表中数据为空",
              "sLoadingRecords": "载入中...",
              "sInfoThousands": ",",
              "oPaginate": {
                  "sFirst": "首页",
                  "sPrevious": "上页",
                  "sNext": "下页",
                  "sLast": "末页"
              },
              "oAria": {
                  "sSortAscending": ": 以升序排列此列",
                  "sSortDescending": ": 以降序排列此列"
              }
            }
          });

            $("#Xiad").click(function(){
                self.location='/index/personal/personal'; 
            });

            $("#Fanhui").click(function(){
                self.location='/'; 
            });

          $('#del').alert();
        </script>
    </body>
</html>
