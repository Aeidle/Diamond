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
        <script defer> //this script to prevent resubmission on POST method
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
             }
        </script>
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
            <h1 class="creat-new-account">Create a new account<span class="dot">.</span></h1>
            <h3 class="already-member">Already a member ? <a href="login.php">Login</a></h3>
            <form name="signUp" action="adduser.php" method="POST">
                <input style="margin-right: 1em;" class="input1" type="text" name="firstname" placeholder="First Name">
                <input style="margin-left: 1em;" class="input1" type="text" name="lastname" placeholder="Last Name">
                <br>
                <input class="input2" type="email" name="email" placeholder="Email">
                <br>
                <input class="input2" type="password" name="password" placeholder="Password">
                <br><br>
                <input class="input3 sbmt" type="submit" value="Creat account">
            </form>
        </div>
    </body>
</html>