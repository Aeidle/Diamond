<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Adil Alami">
        <meta name="version" content="1.0">
        <meta name="description" content="des">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>D/amond</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="container">
        <nav>
        <div class="diamond"> <a href="#"><img src="diamond.svg" alt="diamond"></a> </div>
            <ul class="navbar">
                <li><a href="#">D/amond</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Join</a></li>
            </ul>
        </nav>
        <h1 class="creat-new-account">Good to see you again<span class="dot">.</span></h1>
        <h3 class="already-member">New here? <a href="sign-up.php">Create an Account</a></h3>
        <form name="loginForm" action="verify.php" method="POST">
            <input class="input2" type="email" name="email" placeholder="Email">
            <br>
            <input class="input2" type="password" name="password" placeholder="Password">
            <br>
            
            <a class="forgot-password" href="#">Forgot password ?</a>
            <br><br>
            <input class="input3 sbmt" type="submit" value="Login">
        </form>
        </div>
        
    </body>
</html>