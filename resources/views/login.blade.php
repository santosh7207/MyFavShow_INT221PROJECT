
<!DCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css\login.css')}}">
    <script src="{{asset('css\logout.js')}}"></script>
    
    
  </head>
  <body>
    
    <form action="{{action('LoginController@store')}}" method="POST">
      @csrf
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
</html>