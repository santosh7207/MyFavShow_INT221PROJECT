<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="<?php echo e(asset('css\login.css')); ?>">
    <script src="<?php echo e(asset('css\login.js')); ?>"></script>
  </head>
 
  <body>

    <form action="<?php echo e(action('RegisterController@store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="login-box">
		<h1>Sign Up</h1>
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input id="t1" type="text" name="firstName" placeholder="First name" value="">
		  </div>
		  <div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input id="t2" type="text" name="lastName" placeholder="Last name" value="">
		  </div>
        <div class="textbox">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
          	<input id="t3" type="text" name="email" placeholder="Email" value="">
        </div>
        <div class="textbox">
          	<i class="fa fa-lock" aria-hidden="true"></i>
          	<input id="t4" type="password" name="password" placeholder="password" value="">
        </div>
        <button class="btn" type="submit" name="register" onclick="return check()">Sign up</button><br><p style="font-size: 16px;color: white;">
        Already have an account? <a style="color: black;font-size: 20px;" href="login"><b>Login</b></a></p>
      </div>
  
    </form>
  </body>
  </html>
   

<?php /**PATH C:\Windows\System32\myproject1\resources\views//register.blade.php ENDPATH**/ ?>