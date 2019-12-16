<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <base href="<?php echo e(BASE_URL); ?>">
  <link rel="stylesheet" type="text/css" href="public/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Forgot password</title>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <!-- <h1>Forgot Password</h1> -->
    </div>

    <div class="login-box">
      <form class="login-form" action="confirmpassword" method="post" id="loginForm">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Reset Password</h3>
        
        <div class="form-group">
          <label class="control-label">Mật khẩu mới</label>
          <input class="form-control" name="password" type="password" id="password" placeholder="mật khẩu mới" autofocus>
        </div>
        <div class="form-group">
          <label class="control-label">Xác nhận mật khẩu</label>
          <input class="form-control" name="repassword" type="password" placeholder="xác nhận mật khẩu" id="repassword">
        </div>
        <br>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block" type="button" id="forgotpass"><i class="fa fa-sign-in fa-lg fa-fw"></i>Xác nhận</button>
        </div>
      </form>
    </div>
  </section>
  <!-- Essential javascripts for application to work-->
  <script src="<?php echo e(BASE_URL); ?>public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="<?php echo e(BASE_URL); ?>public/js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script type="text/javascript">
    $('#forgotpass').click(function(){
      let password = $('#password').val();
      let repassword = $('#repassword').val();
      let token = '<?php echo e($token); ?>';
      $.ajax({
        url: 'confirmpassword',
        type: 'post',
        dataType: 'json',
        data: {password: password,repassword:repassword,token:token},
      })
      .done(function(data) {
        // console.log(data);
        if(data.msg==0){alert('Mật khẩu không khớp');}
        if(data.msg==1){alert('Đổi mật khẩu thành công');window.location = "http://localhost/project1/login";}
      })
      
    });
  </script>
</body>
</html><?php /**PATH C:\xampp1\htdocs\project1\views/backend/forgot.blade.php ENDPATH**/ ?>