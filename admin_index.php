<?php
    require 'header.php';
?>

    <main>
        <?php
                if (isset($_SESSION['username'])){
                if(isset($_SESSION['Level'])){
                    
                    include 'penjualan_admin.php';
                
                exit();
                
                }
                }
                else{
                    echo'<div class="textoutw">
            
                    </div>';
                    exit();
        
                }
                    
                
                
        ?>
        
        
    </main>