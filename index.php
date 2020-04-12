<?php
    require 'header.php';
?>

    <main>
        <?php
        if(isset($_SESSION['ID'])){
            include 'penjualan.php';
        }
        ?>
        
        
    </main>
