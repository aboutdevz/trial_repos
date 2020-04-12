<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/signupstyle.css">
    <title>Signup</title>
</head>
<body>
    <nav>
            <!--<a class="H_logo" href="index.php">
                <img class="logo" src="img/SAMANHUDI MALAHAYATI FIX NO REVISI.png" alt="logo">
            </a>-->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact us">Contact Us</a></li>
            </ul>
    </nav>
    <div class="lgn_box">
            <h1>SignUp</h1>
            <?php
            if(isset($_GET['error']))
            {
                if($_GET['error'] =="kosong")
                {
                    echo '<p style="text-align:center; color:red;">Isi semua form</p>';
                }
                elseif($_GET['error'] =="invalidusernameandemail")
                {
                    echo '<p style="text-align:center; color:red;">Username Atau Email Anda Salah</p>';
                }
                elseif($_GET['error'] =="invalidemail")
                {
                    echo '<p style="text-align:center; color:red;">Email Anda Salah</p>';
                }
                elseif($_GET['error'] =="invalidusername")
                {
                    echo '<p style="text-align:center; color:red;">Username Sudah Ada</p>';
                }
                elseif($_GET['error'] =="invalid password")
                {
                    echo '<p style="text-align:center; color:red;">password salah</p>';
                }
            }
            
            
            elseif (isset($_GET['signup']) == "success")
            {
                echo '<p style="text-align:center; color:blue;">Sign in Berhasil</p>';
                exit();
            }
            ?>
            <form action="includes/signup_incl.php" method="post">
                <div class="textbox">
                <i class="far fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="textbox">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="textbox">
                <i class="fas fa-unlock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="textbox">
                    <input type="password" name="re-password" placeholder="Re-Password">
                </div>
                <h4>Admin?</h4>
                <input type="radio" class="admin_rdio" type="submit" name="admin" value="Y">YA</input>
                <input type="radio" class="admin_rdio" type="submit" name="admin" value="N">TIDAK</input>
                <button class="login_btn" type="submit" name="sgn_sb">Signup</button>
                
            </form>
        
    </div>
</body>
</html>