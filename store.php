<!--  Oran Ofzer, id 205633423
      Tal Alter, id 206292450 -->
<div class="content">
    <div class="container">
        <div class="row">
           <div class="col" id="shop-sign">
              <p>Products:</p>
           </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php
            foreach ($products as $prod) {
                echo "<div class='col-xs-12 col-md-4 col-sm-4'>
                <div class='card'>
                <img class='card-img-top' src=\"${prod['image']}\" alt=\"${prod['name']}\">
                <div class='card-body'>
                    <h5 class='card-title item-title'>${prod['name']}</h5>
                    <h6>$${prod['price']}</h6>
                    <p class='card-text item-desc'>${prod['item_description']}</p>
                </div>
                <div class='card-footer'>
                    <button type='button' class='btn btn-primary addToCart'>Add To Cart</button>
                </div>
              </div>
              </div>";
      }
      ?>

        </div>
    </div>
</div>

