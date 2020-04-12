<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="css/hstyle.css">
    <title>My Website</title>   
</head>
<body>
    <header>
        <nav>
            <!--<a class="H_logo" href="index.php">
                <img class="logo" src="img/SAMANHUDI MALAHAYATI FIX NO REVISI.png" alt="logo">
            </a>-->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact us">Contact Us</a></li>
                <li>
                    <?php
                        if(isset($_SESSION['ID'])){

                           echo '<form action="includes/logout_incl.php" method="post">
                                <button style="float:right;" class="logout_btn" type="submit" name="logout_Sb">Logout</button>
                            </form>';
                        }
                            
                    ?>
                </li>
                <li style="float:right;"><a href="signup.php">SignUp</a></li>
            </ul>
        </nav>
        <?php
        if(!isset($_SESSION['ID']))
        {
            echo '<div class="lgn_box">
            <h1>Login</h1>';
            if(isset($_GET['error']))
            {
                if($_GET['error'] =="kosong")
                {
                    echo '<p style="text-align:center; color:red;">Username Dan Password Tidak Boleh Kosong </p>';
                }
                if($_GET['error'] =="sqlerror")
                {
                    echo '<p style="text-align:center; color:red;">Website Error Kontak Segera Admin Kami</p>';
                }
                if($_GET['error'] =="passuseersalah")
                {
                    echo '<p style="text-align:center; color:red;">Username Atau Password Anda Salah</p>';
                }
                if($_GET['error'] =="nouser")
                {
                    echo '<p style="text-align:center; color:red;">Anda Belum Memiliki Akun</p>';
                }
            }
            echo '<form action="includes/login_incl.php" method="post">
                <div class="textbox">
                <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="username">
                </div>
                <div class="textbox">
                <i class="fas fa-unlock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button class="login_btn" type="submit" name="sgn_Sb">Login</button>
            </form>';
        }
        ?>
        
            
        </div>
    </header>
</body>
</html>