<style>
    body {
    background-color: white;
    /*background:url(/Image/login.jpg)no-repeat 0 center;*/
}

#loginbox {
    margin-top: 30px;
}

#loginbox > div:first-child {        
    padding-bottom: 10px;    
}

.iconmelon {
    display: block;
    margin: auto;
}

#form > div {
    margin-bottom: 25px;
}

#form > div:last-child {
    margin-top: 10px;
    margin-bottom: 10px;
}

.panel {    
    background-color: transparent;
}

.panel-body {
    padding-top: 30px;
    background-color: rgba(2555,255,255,.3);
}

#particles {
    width: 100%;
    height: 100%;
    overflow: hidden;
    top: 0;                        
    bottom: 0;
    left: 0;
    right: 0;
    position: absolute;
    z-index: -2;
}

.iconmelon,
.im {
  position: relative;
  width: 150px;
  height: 150px;
  display: block;
  fill: #525151;
}

.iconmelon:after,
.im:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
<div class="container">    
        
    <div id="loginbox" class="col-sm-5 col-sm-offset-4"> 
        
        <div class="row">                
            <div class="iconmelon">
              <svg viewBox="0 0 32 32">
                <g filter="">
                  <use xlink:href="#git"></use>
                </g>
              </svg>
            </div>
        </div>
        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">Please sign in</div>
            </div>     

            <div class="panel-body" >

                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="user" type="text" class="form-control" name="user" value="" placeholder="登录账号">
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="密码">
                    </div>                                                                  
                    <div class="input-group">
                        <!-- Button -->
                        <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                        <input id="captcha" type="text" class="form-control" name="captcha" placeholder="验证码" style="width: 200px">

                        <img id="code" src="/index/login/getCode" alt="看不清楚，换一张" style="cursor: pointer; vertical-align:middle;" onclick="javascript:newgdcode(this,this.src);" />
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <a id="tijiao" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</a>
                        </div>
                    </div>
                </form>     
            </div>                     
        </div>
      <div id="errAlert" class="alert alert-success" style="margin:0 auto;display: none">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error! </strong>完整填写账号和密码，请注意大小写。
      </div>
    </div>
</div>

<script>
  $('#tijiao').on('click', function(){
        var user = $('#user').val();
        var password = $('#password').val();
        var captcha = $('#captcha').val();
        if (user.length==0||password.length==0||captcha.length==0)
        {
          $("#errAlert").fadeTo(300,1.5);
        }else{
            // alert(password);
            $.post('Login/tijiao',{"user":user,"password":password,"captcha":captcha},function(result){
              if (result=='ok') {
              window.location.href='/';
              }else{
                $("#errAlert").fadeTo(200,1.5);
              }
            });
        }
  });

  $('#captcha').bind('keyup', function(event) {
    if (event.keyCode == "13") {
      //回车执行查询
      $('#tijiao').click();
    }
  });

  $('#code').on('click', function(){
    $.post('Login/getCode',{},function(result){});

  });

  function newgdcode(obj,url) { 
    obj.src = url+ '?nowtime=' + new Date().getTime(); 
//后面传递一个随机参数，否则在IE7和火狐下，不刷新图片 
  } 

</script>