<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGIN PAGE</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<!-- <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="" width="100px">
        </div>
        <nav>
          <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>
        </nav>
  </div>    -->
<body>

<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> 
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                    <label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up">
                    <label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-space">
                        <div class="login">
                            <form method="POST" action="connection.php" autocomplete="off" enctype="multipart/form-data">
                            <div class="group"> 
                                <label for="username" class="label">Username</label> 
                                <input id="username" name="username" class="form-control" placeholder="Username" type="text" required> 
                            </div>
                            <div class="group"> 
                                <label for="password" class="label">Password</label> 
                                <input id="password" name="password" class="form-control" placeholder="Password" type="password" required>
                            </div>
                            <div class="group"> 
                                <input id="check" type="checkbox" class="check" checked> 
                                <label for="check">
                                    <span class="icon"></span> Keep me Signed in</label> 
                            </div>
                            <div class="group"> 
                                <button type="submit" class="button" value="Sign Up" href="login.php" name="login">Sign In</button>
                            </div>
                            <div class="hr"></div>
                            <div class="foot"> 
                                <a href="#">Forgot Password?</a> 
                            </div>
                        </form>
                        </div>
                        <div class="sign-up-form">
                            <form method="POST" action="registerUser.php" autocomplete="off" enctype="multipart/form-data">
                            <div class="group"> 
                                <label for="username" class="label">Username</label> 
                                <input id="username" name="username" type="text" class="input" placeholder="Create your Username" required> 
                            </div>
                            <div class="group"> 
                                <label for="email" class="label">Email Address</label> 
                                <input id="email" name="email" type="email" class="input" placeholder="Enter your email address" required> 
                            </div>
                            <div class="group"> 
                                <label for="password" class="label">Password</label> 
                                <input id="password" name="password" type="password" class="input" data-type="password" placeholder="Create your password" required> 
                            </div>
                            <div class="group"> 
                                <label class="label">Phone number</label> 
                                <input id="phone" name="phone" type="tel" class="input" placeholder="Enter your phone number" pattern="[0-9]{11}"> </div>
                            <!-- <div class="group"> 
                                <label for="gender" class="label">Gender</label> 
                                <input id="gender" name="gender" type="text" class="input" placeholder="Enter your gender" required> 
                            </div> -->
                            <div class="group"> 
                                <label for="gender" class="label" type="text">Gender</label> 
                                <select name="gender" id="gender" class="form-control">
                                    <option selected="">Male</option>
                                    <option>Female</option>
                                </select>
                            </div> 
                            <!-- <div class="group">
                                <label for="gender" class="label" type="text">Gender</label> 
                                <input id="gender" type="radio" name="gender" value="Male"/> Male
                                <input id="gender" type="radio" name="gender" value="Female"/>Female
                                <input id="gender" type="radio" name="gender" value="Other"/>Other
                            </div> -->
                            <div class="group"> 
                                <button type="submit" class="button" value="Sign Up" href="login.php" name="btnAdd">Register</button>
                            </div>
                            <div class="foot"> 
                                <label for="tab-1">Already Member?</label> 
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>