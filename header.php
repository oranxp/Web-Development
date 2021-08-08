<!--  Oran Ofzer, id 205633423
      Tal Alter, id 206292450 -->
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

    </head>
    <body>
    <header id="home">
        <nav class="navbar fixed-top navbar-expand-sm navbar-expand-xs navbar-light bg-light" id="nav">
            <img src="img/logo.png" class="navbar-brand" height="50" width="50">
            <h class="navbar-brand">Sports Store</h>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <input type="image" src="img/shopping_cart.png" height="30" width="30" data-toggle="modal" data-target="#shoppingCart"><span id="productCount">0</span>
                    </li>
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact-us" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <body>
    <div class="modal" id="shoppingCart" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Shopping Cart</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class = "modal-body">
                <form method="post" action="orderSummary.php" id="orderPlaced">
                    <div class="products">
                        <table class="productsSum" name="productSummary">
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </table>
                        <h4 class="totalPriceToPay"></h4>
                    </div>
                   <input type="submit" id="placeOrder" value="Place Order" disabled=true>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close Cart</button>
                </div>
            </div>
        </div>
    </div>