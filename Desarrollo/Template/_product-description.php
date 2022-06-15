<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
if ($item['item_id'] == $item_id) :
?>
<!--   product  -->
<section id="productos">
    <div class="container">
        <div class="grid-product">
            <div class="product-img-container">
                <img
                        src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>"
                    alt="product"
                    class="product-img"
                />
                <div class="buy-btns">
                    <a href="<?php printf('%s?item_id=%s', 'cart.php',  $item['item_id']); ?>" class="comprar-btn">Comprar</a>
                    <a href="<?php printf('%s?item_id=%s', 'cart.php',  $item['item_id']); ?>" class="cart-btn">Carrito</a>
                </div>
            </div>
            <div>
                <h5 class="product-name"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>fabricado por <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="info-rating">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <a href="product.html" class="leer-mas"
                    >20,534 ratings | 1000+ preguntas respondidas</a
                    >
                </div>
                <hr />

                <!---    product precio       -->
                <table class="table">
                    <tr>
                        <td>M.R.P:</td>
                        <td><strike>$<?php echo $item['item_price'] ?? 0; ?></strike></td>
                    </tr>
                    <tr>
                        <td>Oferta:</td>
                        <td class="td">
                            $<span><?php echo $item['item_price'] - 49.99 ?? 0; ?></span
                            ><small>&nbsp;&nbsp;Incluyendo todos los impuestos</small>
                        </td>
                    </tr>
                    <tr>
                        <td>Ahorra:</td>
                        <td><span class="ahorras">$49.99</span></td>
                    </tr>
                </table>
                <!---    ! product precio       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="info-p">
                        <div class="return">
                            <div>
                                <span class="fas fa-retweet icon"></span>
                            </div>
                            <a href="#" class="leer-mas"
                            >10 Días de<br />
                                Reemplazo</a
                            >
                        </div>
                        <div class="return">
                            <div>
                                <span class="fas fa-truck icon"></span>
                            </div>
                            <a href="#" class="leer-mas"
                            >Matrícula diaria <br />Entregada</a
                            >
                        </div>
                        <div class="return">
                            <div>
                                <span class="fas fa-check-double icon"></span>
                            </div>
                            <a href="#" class="leer-mas">1 año de <br />Garantía</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr />

                <!-- order-details -->
                <div id="order-details">
                    <small>Delivery: Mar 29 - Apr 1</small>
                    <small
                    >Vendido por <a href="#">Daily Electronics </a>(4.5 de 5
                        estrellas | 18,198 ratings)</small
                    >
                    <small
                    ><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; Barcelona -
                        424201</small
                    >
                </div>
                <!-- !order-details -->

                <div class="color">
                    <!-- color -->
                    <div class="colors">
                        <h6 class="titles-p">Color:</h6>
                        <div class="color-around">
                            <button class="rounded-circle-1"></button>
                            <button class="rounded-circle-2"></button>
                            <button class="rounded-circle-3"></button>
                        </div>
                    </div>
                    <!-- !color -->
                    <div>
                        <!-- product qty section -->
                        <div>
                            <h6 class="titles-p">Cantidad</h6>
                            <div>
                                <button data-id="pro1">
                                    <i class="fas fa-angle-up"></i>
                                </button>
                                <input
                                    type="text"
                                    data-id="pro1"
                                    disabled
                                    value="1"
                                    placeholder="1"
                                />
                                <button data-id="pro1">
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!-- size -->
                <h6 class="titles-p">Almacenamiento:</h6>
                <div class="size">
                    <div class="color">
                        <div>
                            <button class="btn-storage">128 GB</button>
                        </div>
                        <div>
                            <button class="btn-storage">512 GB</button>
                        </div>
                        <div>
                            <button class="btn-storage">1 TB</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->
            </div>
        </div>
        <div>
            <h6 id="titulo">Descripción del Producto</h6>
            <hr />
            <p class="card-text">
            El teléfono es un dispositivo de telecomunicación creado para
							transmitir señales acústicas a distancia por medio de señales
							eléctricas. Sapiente optio sunt provident, accusantium eligendi
							eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga.
							Maiores minus, accusantium velit numquam a aliquam vitae vel?
            </p>
            <p class="card-text">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat
                inventore vero numquam error est ipsa, consequuntur temporibus
                debitis nobis sit, delectus officia ducimus dolorum sed corrupti.
                Sapiente optio sunt provident, accusantium eligendi eius
                reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga.
                Maiores minus, accusantium velit numquam a aliquam vitae vel?
            </p>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
endif;
endforeach;
?>