<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>SignIn and SignUp</title>
   <link rel="stylesheet" href="log_style.css">
</head>
<body>
   <div class="hero">n
      <div class="form-box">
         <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Sign In</button>
            <button type="button" class="toggle-btn" onclick="register()">Sign Up</button>
         </div>
         <form action="verified.php" method="post" id="login" class="input-group">
            <input type="text" name="user" class="input-field" placeholder="User Id" required>
            <input type="Password" name="pass" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="chech-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn">Sign In</button>
         </form>
         <form  action="registration.php" method="post" id="register" class="input-group">
            <input type="text" name="user" class="input-field" placeholder="Enter Name" required>
            <input type="email" name="email" class="input-field" placeholder="Email Id" required>
            <input type="Password" name="pass" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="chech-box"><span>I agree to the terms & conditions</span>
            <button type="submit" class="submit-btn">Sign Up</button>
         </form>
      </div>
   </div>

   <script>
      var x = document.getElementById('login');
      var y = document.getElementById('register');
      var z = document.getElementById('btn');

      function register() {
         x.style.left = "-400px";
         y.style.left = "50px"
         z.style.left = "110px"
      }

      function login() {
         x.style.left = "50px";
         y.style.left = "450px"
         z.style.left = "0"
      }


   </script>


</body>
</html>