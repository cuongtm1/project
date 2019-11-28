
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo e(BASE_URL); ?>">
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
      <h1>Vali</h1>
    </div>
    <div class="login-box">
      <form class="login-form" action="login" method="POST" id="formLogin">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
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
            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
          </div>
        </div>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
        </div>
      </form>


        
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="public/js/validate.js" type="text/javascript" charset="utf-8" async defer></script>
  </body>
  </html><?php /**PATH C:\xampp1\htdocs\project1\views/login.blade.php ENDPATH**/ ?>