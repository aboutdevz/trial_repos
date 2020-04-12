<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#aboutme">About Me</a></li>
                <li style="float:right;"><a href="signup.php">Signup</a></li>
            </ul>
        </nav>
            <div class="lgn_bx">
                <h1>Login</h1>
                <form action="includes/login_incl.php" method="post">
                    <div class="textbox">
                        <input type="text" name="username" placeholder="Username">  
                    </div>
                    <div class="textbox">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <button class="lgn_btn" type="submit" name="lgn_btn">Login</button>
                </form>
            </div>
    </header>
</body>
</html>