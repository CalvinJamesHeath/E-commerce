<!-- Top Sale -->
<section id="en-oferta">
    <h4 id="titulo">Telefónos</h4>
    <hr />
    <!-- grid -->
    <div class="grid">
        <?php foreach ($product_shuffle as $item) {;
        ?>
        <div class="item">
            <div class="product">
                <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"
                ><img
                            src="<?php echo $item['item_image'] ?? "./imagenes/products/1.png" ?>"
                        alt="product1"
                        class="img-fluid"
                    /></a>
                <div>
                    <h6 class="iphone13"><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price">
                        <span>$<?php echo $item['item_price'] ?? "Unknown"; ?></span>
                    </div>
                    <div class="buttons">
                        <button class="cart-button">
                            <span class="add-to-cart">Add to cart</span>
                            <span class="added">Agregado!</span>
                            <i class="fa fa-shopping-cart"></i>
                            <i class="fa fa-square"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php } // closing foreach function ?>
    </div>
    <!-- !grid -->
    <br>
</section>
<!-- !Top Sale -->