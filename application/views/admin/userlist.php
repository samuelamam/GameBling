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
        <div class="alert alert-primary" role="alert" data-dismiss="alert" style="display: none;" id="alertdel">删除用户成功!</div>
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
                  <td><?=$v['user']?></td>
                  <td><?=$v['remarks']?></td>
                  <td><?=$v['create_time']?></td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" onclick="makemodal(<?=$v['id']?>)">修改</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="del(<?=$v['id']?>)">删除</button>
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
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">修改会员</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">登陆账号名：</span>
                  <input type="text" disabled id="user" name="" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">登陆密码：</span>
                  <input type="text" id="passwd" placeholder="不修改无需填写" name="" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">角色选择：
                  <select class="custom-select input-group input-group-lg" id="role">
                    <option selected style="display: none;">请选择角色</option>
                    <option value="0">管理员</option>
                    <option value="1">普通会员</option>
                  </select>
                  </span>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon">备注：</span>
                  <input type="text" id="remarks" name="" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
              <div class="col-sm-4">
                <div id="alert" class="alert alert-danger fade" role="alert"></div>
              </div>
            </div>
          </div>
        </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
            <button class="btn btn-primary" id="checkedit">修改</button>
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

    function makemodal(id) {
      $.post(
        '<?=base_url().'admin/user/getuser'?>', 
        {id:id}, 
        function (result) {
          if (result != 'err_getuser') {
            $('#user').val(result.user);
            $('#role').val(result.role);
            $('#remarks').val(result.remarks);
            $('#edit').modal();
            return;
          }
          alert('数据库错误');
        });
    }

    $('#checkedit').click(function () {
      if ($('#user').val() == '' || $('#role').val() == '') {
          $('#alert').text('登陆名、身份不能为空').addClass('show active');
          return;
        }
        $.post(
          '<?=base_url().'admin/user/edit'?>', 
          {
            user:$('#user').val(),
            passwd:$('#passwd').val(),
            role:$('#role').val(),
            remarks:$('#remarks').val()
          }, 
          function (result) {
            if (result == 'success') {
              alert('修改成功');
              window.location.reload();
            }
        });
    });

    function del(id) {
      var can = confirm("确定删除用户？");
      if (can) {
        $.post('<?=base_url().'admin/user/del'?>', {id:id}, function (result) {
          if (result == 'success') {
            $('#alertdel').show();
            setTimeout("window.location.reload()", 3000);
          }
        });
      }
    }
  </script>
</body>

</html>
