
<!DCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="<?php echo e(asset('css\login.css')); ?>">
    <script src="<?php echo e(asset('css\logout.js')); ?>"></script>
    
    
  </head>
  <body>
    
    <form action="<?php echo e(action('LoginController@store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="login-box">
        <h1>Login</h1>
        <div class="textbox">
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
          <input id="t1" type="text" name="email" placeholder="Email" value="">
        </div>
        <div class="textbox">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input id="t2" type="password" name="password" placeholder="password" value="">
        </div>
        <button class="btn" type="submit" name="login" onclick="return check()">Login</button><br>
        <p style="font-size: 16px;color: white;">
        Don't have an account?  <a style="color: black;font-size: 20px" href="register"><b>Sign Up</b></a>
      </div>
    </form>
  </body>
</html><?php /**PATH C:\Windows\System32\myproject1\resources\views/login.blade.php ENDPATH**/ ?>