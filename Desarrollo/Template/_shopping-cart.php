
<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
if ($item['item_id'] == $item_id) :
?>
<!-- Shopping cart section  -->
<section id="cart">
    <div id="en-oferta">
        <h4 id="titulo">Carrito</h4>
        <hr />
<br>
        <!--  shopping cart items   -->
        <div class="grid-cart">
            <div>
                <!-- cart item -->
                <div class="cart-product">
                    <div>
                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>">

                            <img
                            src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>"
                            alt="cart1"
                            class="img-cart"
                            />
                        </a>
                    </div>
                    <div>
                        <h5><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>fabricado por <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <!-- product rating -->
                        <div>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="leer-mas">20,534 ratings</a>
                        </div>
                        <!--  !product rating-->

                        <!-- product qty -->
                        <div>
                            <div class="cantidad">
                                <button type="submit">Eliminar</button>
                                <button type="submit">Guardar para después</button>
                            </div>
                        </div>
                        <!-- !product qty -->
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            $<span class="product_price"><?php echo $item['item_price'] - 49.99 ?? 0; ?></span>
                        </div>
                    </div>
                </div>
                <!-- !cart item -->

            </div>
            <!-- subtotal section-->
            <div>
                <div class="orden">
                    <h6 class="free">
                        <i class="fas fa-check"></i> Su pedido es elegible para
                        entrega GRATIS!
                    </h6>
                    <hr />
                    <div>
                        <h5>
                            Subtotal (2 item):&nbsp;
                            <span class="text-danger"
                            >$<span class="text-danger" id="deal-price"><?php echo $item['item_price'] - 49.99 ?? 0; ?></span>
										</span>
                        </h5>
                        <button type="submit" class="comprar-btn-carrito">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->
<?php
endif;
endforeach;
?>