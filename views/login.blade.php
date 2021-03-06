<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="{{ BASE_URL }}">
  <link rel="stylesheet" type="text/css" href="public/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login - Vali Admin</title>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1>Ánh Mai Sáng</h1>
    </div>
    <div class="login-box">
      <form class="login-form" action="login" method="POST" id="formLogin">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h3>
        <div class="form-group">
          <label class="control-label">SỐ ĐIỆN THOẠI</label>
          <input class="form-control" name="phone" type="text" placeholder="phone" >
        </div>
        <div class="form-group">
          <label class="control-label">PASSWORD</label>
          <input class="form-control" name="pass" type="password" placeholder="Password">
        </div>
        <div class="form-group">
          <div class="utility">
            <div class="animated-checkbox">
              <label>
                <input type="checkbox"><span class="label-text">Stay Signed in</span>
              </label>
            </div>
            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Quên mật khẩu ?</a></p>
          </div>
        </div>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
        </div>
      </form>
      <form class="forget-form" action="forgotpassword" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Tìm lại mật khẩu ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" name="email" id="email" placeholder="Nhập email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="button" id="reset"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Trở lại login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="public/js/jquery-3.2.1.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
      $('#reset').click(function(){
        let email = $('#email').val();
        $.ajax({
          url: 'forgotpassword',
          type: 'post',
          dataType: 'json',
          data: {email:email},
        })
        .done(function(data) {
          if(data.msg==0){
            alert('Email không tồn tại');
          }
          if(data.msg==1){
            alert('Vui lòng truy cập vào email xác nhận mật khẩu mới');
          }
        })
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="public/js/validate.js" type="text/javascript" charset="utf-8" async defer></script>
  </body>
  </html>