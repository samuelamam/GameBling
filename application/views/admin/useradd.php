  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">会员中心</a>
        </li>
        <li class="breadcrumb-item active">增加会员</li>
      </ol>

      <br>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="input-group input-group-lg">
            <span class="input-group-addon">登陆账号名：</span>
            <input type="text" id="user" name="" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="input-group input-group-lg">
            <span class="input-group-addon">登陆密码：</span>
            <input type="text" id="passwd" name="" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="input-group input-group-lg">
            <span class="input-group-addon">角色选择：
            <select class="custom-select input-group input-group-lg" id="role">
              <option selected>请选择角色</option>
              <option value="0">管理员</option>
              <option value="1">普通会员</option>
            </select>
            </span>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="input-group input-group-lg">
            <span class="input-group-addon">备注：</span>
            <input type="text" id="remarks" name="" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
        <button id="sub" type="button" class="btn btn-success btn-lg" aria-pressed="true">增加会员</button>
        </div>
        <div class="col-sm-4">
          <div id="alert" class="alert alert-danger fade" role="alert"></div>
          <div id="suss" class="alert alert-success fade" role="alert"></div>
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
    $('#sub').click(function () {
      if ($('#user').val() == '' || $('#passwd').val() == '' || $('#role').val() == '') {
        $('#alert').text('登陆名、密码、身份不能为空').addClass('show active');
        return;
      }
      $.post(
        '<?=base_url().'admin/user/add'?>', 
        {
          user:$('#user').val(),
          passwd:$('#passwd').val(),
          role:$('#role').val(),
          remarks:$('#remarks').val()
        }, 
        function (result) {
          if (result == 'success') {
            alert('添加成功');
            window.location.reload();
          }
      });
    });
  </script>
</body>

</html>
