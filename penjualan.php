<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="penjualan.css">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="js/penjualan.js" async></script>
</head>
<body>
<!--drop down menu-->
    <nav class="navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="" class="dropdown" data-toggle="dropdown" id="text">Laptop<span class="caret"></span></a>
                </li>
                </ul>
            <ul class="drowdown-menu" role="menu">
                <li><a href="">Asus</a></li>
                <li><a href="">Acer</a></li>
                <li><a href="">Hp</a></li>
            </ul>
    </div>
    </nav>

<!--Inserting image-->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/basket.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">basket</a></h4>
                                <h5 class="media-heading"> by <a href="#">spalding</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control" id="jumlah" onkeyup="HargaTotal()">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                        <input type="number"  id="harga_basket" value="30000" disabled>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                        <input type="number" class="form-control" id="total_harga_basket" disabled>
                        </td>
                        
                    </tr>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/nezukoo.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Nezukoo</a></h4>
                                <h5 class="media-heading"> by <a href="#">Anime</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="number" class="form-control" id="beli" onkeyup="Total()"  >
                        </td>
                        <td class="col-md-1 text-center">
                        <input type="number"  id="harga" value="2000" disabled>
                        </td>
                        <td class="col-md-1 text-center">
                        <input type="number" class="form-control" id="total" disabled>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3>
                        <input type="number" class="form-control" id="tot" onekeyup="Ya()">
                        </td></h3>
                        
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>
                         <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        </td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                        <td>
                       
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    function Ya(){
    var tot = document.getElementById('tot');
    var tot1 = Number.parseInt(tot.value);
    var total1 = document.getElementById('total_harga_basket');
    var total2 = document.getElementById('total');
    var totalint1 = Number.parseInt(total1.value);
    var totalint2 = Number.parseInt(total2.value);
    if((totalint1 && totalint2 > 0)){
        tot1 = totalint1+totalint2;
    }
}
</script>
</html>