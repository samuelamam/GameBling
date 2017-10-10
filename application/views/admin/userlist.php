  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">会员中心</a>
        </li>
        <li class="breadcrumb-item active">列表</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> 数据表格</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>登陆名</th>
                  <th>备注</th>
                  <th>创建时间</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>登陆名</th>
                  <th>备注</th>
                  <th>创建时间</th>
                  <th>操作</th>
                </tr>
              </tfoot>
              <tbody>
                <?php if (!empty($userarray)):?>
                <?php foreach ($userarray as $v):?>
                <tr>
                  <td><?=$v['id']?></td>
                  <td><?=$v['user']?></td>
                  <td><?=$v['remarks']?></td>
                  <td>
                    <a>修改</a>
                    <a id="del">删除</a>
                  </td>
                </tr>
              <?php endforeach; ?>
              <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <!-- <small>Copyright © Your Website 2017</small> -->
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/application/views/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/application/views/admin/vendor/popper/popper.min.js"></script>
    <script src="/application/views/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/application/views/admin/vendor/datatables/jquery.dataTables.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/application/views/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/application/views/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/application/views/admin/js/sb-admin.min.js"></script>
    <script src="/application/views/admin/js/sb-admin-datatables.min.js"></script>

    <div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button id="del" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">删除</span></button>
    </div>
    
  </div>

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

    $('#del').alert();
  </script>
</body>

</html>
