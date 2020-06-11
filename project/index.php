<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8 ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pashanur's Expense</title>
    <link href="">
</head>
<body>
    <div class="login-panel">
<form method="post" action="insert.php" id="form1">
    <h2>Register Here <img src="download.png" style="width: 100px;
height: 100px;float:right; "></h2><br>
                        <input type="radio"     name="gender"       value="mr"  required> Mr
                        <input type="radio"     name="gender"       value="mrs" required> Mrs 
                         <input type="radio"     name="gender"       value="mrs" required> Other<br><br>
    <h3>Username</h3>              <input type="text"      name="username"     class="radius" title="username" placeholder="username" required> <br><br>  
    <h3>Adress</h3><input type="text"      name="adress"       class="radius" title="adress" placeholder="adress"> <br> <br>
    <h3>Phone</h3><input type="tel" pattern="[0-9]{10}"    name="phone"        class="radius" title="phone" placeholder="phone" required> <br>   <br>
    <h3>Email</h3><input type="email"     name="email"        class="radius" title="email" placeholder="email"required> <br>   <br>
    <h3>City</h3><input type="text"      name="city"         class="radius" title="city" placeholder="city" required> <br><br>
    <h3>Password</h3><input type="password"  name="password"     class="radius"    placeholder="password" required >  <br> <br>
    <h3>Confirm Password</h3><input type="password"  name="password2"    class="radius" placeholder="confirm" required> 
    <br><br>
                <input type="submit"    name="register"     class="register" value="Register" title="Submit" class="radius"> <br>
                <p><b><strong><h4>Already a user ?</h4></strong></b><a href="login.php"  class="login" title="login"><br><br><b>Login Here</b></a></p>
            </div>
</form>
</body>
</html>