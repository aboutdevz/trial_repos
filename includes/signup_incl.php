<?php
    if(isset($_POST['sgn_sb']))
    {

        require 'conn_incl.php';
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $re_password = $_POST['re-password'];
        $admin = $_POST['admin'];
        

        if (empty($username) || empty($email) || empty($password) || empty($re_password))
        {
            header("Location: ../signup.php?error=kosong&username=".$username."&email=".$email);
            exit();
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username))
        {
            header("Location: ../signup.php?error=invalidusernameandemail");
            exit();
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            header("Location: ../signup.php?error=invalidemail&username=".$username);
            exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
        {
            header("Location: ../signup.php?error=invalidusername&email=".$email);
            exit();
        }
        elseif($password !== $re_password)
        {
            header("Location: ../signup.php?error=invalid password&username=".$username."&email=".$email);
            exit();
        }
        elseif(empty($_POST['admin'])){
            header("Location: ../signup.php?error=invalid admin=".$admin);
            exit();
        }
        
        else
        {
            $sql = "SELECT UserId FROM userlgn WHERE UserId=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql))
            {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultchck = mysqli_stmt_num_rows($stmt);
                if($resultchck>0)
                {
                    header("Location: ../signup.php?error=usertaken&email".$email);
                    exit();
                }
                else
                {
                    $admin = $_POST['admin'];
                    $sql = "INSERT INTO userlgn(UserId,UserEmail,UserPass,Level) VALUE(?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql))
                    {
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                    }
                    else
                    {
                        $hashpass = password_hash($password,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashpass,$admin);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signup.php?signup = success");
                        exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else
    {
        header("Location: ../signup.php");
        exit();
    }