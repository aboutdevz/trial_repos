<?php
if(isset($_POST['sgn_Sb']))
{
    require 'conn_incl.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username) || empty($password))
    {
        header("Location:../header.php?error=kosong&username=".$username);
        echo '<script>alert("kolom tidak boleh kosong");</script>';
        exit();
    }
    else
    {
        $sql = "SELECT * FROM userlgn WHERE UserId=? OR UserEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("Location:../header.php?error=sqlerror&username=".$username);
            
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"ss",$username,$password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result))
            {
                $passwordchck = password_verify($password,$row['UserPass']);
                if($passwordchck == false)
                {
                    header("Location:../header.php?error=wrongpass");
                    exit();
                }
                else if($passwordchck == true)
                {
                    session_start();
                    $_SESSION['ID'] = $row['ID'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['Level'] = $row['Level'];
                    if($row['Level']==Y){
                        echo '<script>alert("welcome admin!");document.location.href="../penjualan_admin.php"</script>';
                        exit();
                    }
                    elseif($row['Level']==N){
                        echo '<script>alert("welcome user!");document.location.href="../index.php"</script>';
                        exit();
                    }
                    else{
                    header("Location:../header.php?success");
                    exit();
                    }
                 
                    exit();
                }
                else
                {
                    header("Location:../header.php?error=wrongpass");
                   
                    exit();
                }
            }
            else
            {
                header("Location:../header.php?error=nouser");
                
                exit();
            }
        }
        
    }
    
    
}
else
{
    header("Location:../header.php");
    exit();
}