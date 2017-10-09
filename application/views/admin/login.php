<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>后台管理系统</title>
  <!-- Bootstrap core CSS-->
  <link href="/application/views/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/application/views/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="/application/views/admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">登陆</div>
      <div class="card-body">
        <form action="/admin/login/check_login" method="post">
          <div class="form-group">
            <label for="username">用户名</label>
            <input class="form-control" id="username" name="username" type="text" aria-describedby="emailHelp" placeholder="请输入用户名">
          </div>
          <div class="form-group">
            <label for="password">密码</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="请输入密码">
          </div>
          <!-- <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div> -->
          <button type="submit" class="btn btn-primary btn-block" style="cursor: pointer;" href="#">登陆</button>
        </form>
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="/application/views/admin/vendor/jquery/jquery.min.js"></script>
  <script src="/application/views/admin/vendor/popper/popper.min.js"></script>
  <script src="/application/views/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="/application/views/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script>
            //  firefox
            if (window.sidebar && "object" == typeof (window.sidebar) && "function"== typeof (window.sidebar.addPanel)) {
            }
            //  ie
            else if (document.all && "object" == typeof (window.external)) {
            }
            if (document.all) { 
                alert("IE浏览器无法使用，请使用其他浏览器"); 
            } else { 
//                alert("非IE浏览器");
            }
            if (!!window.ActiveXObject) { 
//                alert("IE浏览器");
            } else { 
//                alert("非IE浏览器"); 
            }
            //下面是区别IE6、IE7、IE8之间的方法：
            var isIE = !!window.ActiveXObject;
            var isIE6 = isIE && !window.XMLHttpRequest;
            var isIE8 = isIE && !!document.documentMode;
            var isIE7 = isIE && !isIE6 && !isIE8;
            if (isIE) {
                if (isIE6) {
//                    alert("ie6");
                }
                else if (isIE8) {
//                    alert("ie8");
                } else if (isIE7) {
//                    alert("ie7");
                }
            }
             
//            document.write('浏览器判别：');
            // 包含「Opera」文字列 
            if (navigator.userAgent.indexOf("Opera") != -1) {
//                document.write('您的浏览器是Opera吧？');
            }
            // 包含「MSIE」文字列 
            else if (navigator.userAgent.indexOf("MSIE") != -1) {
//                document.write('您的浏览器是Internet Explorer吧？');
                  location.href="{:url('login/ie')}";
            }
            // 包含「Chrome」文字列 
            else if (navigator.userAgent.indexOf("Chrome") != -1) {
//                document.write('您的浏览器是Chrome吧？');
            }
            // 包含「Firefox」文字列 
            else if (navigator.userAgent.indexOf("Firefox") != -1) {
//                document.write('您的浏览器时Firefox吧？');
            }
            // 包含「Netscape」文字列 
            else if (navigator.userAgent.indexOf("Netscape") != -1) {
//                document.write('您的浏览器时Netscape吧？');
            }
            // 包含「Safari」文字列 
            else if (navigator.userAgent.indexOf("Safari") != -1) {
//                document.write('您的浏览器时Safari 吧？');
            }
            else {
//                document.write('无法识别的浏览器。');
            }
    </script>  

</body>

</html>
