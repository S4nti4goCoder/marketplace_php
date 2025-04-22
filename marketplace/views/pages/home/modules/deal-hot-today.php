<?php

/*=============================================
Traer todos los productos
=============================================*/
$today = date("Y-m-d");

$url = CurlController::api() . "relations?rel=products,categories&type=product,category";
$method = "GET";
$fields = array();
$header = array();

$hotProducts = CurlController::request($url, $method, $fields, $header)->results;

foreach ($hotProducts as $key => $value) {

    /*==================================================
    Preguntamos si el producto trae ofertas y trae stock
    ==================================================*/
    if ($value->offer_product == null || $value->stock_product == 0) {
        unset($hotProducts[$key]);
    }

    /*====================================================
    Preguntamos si la fecha de la oferta aún no ha vencido
    ====================================================*/
    if ($value->offer_product != null) {
        if ($today > date(json_decode($value->offer_product, true)[2])) {
            unset($hotProducts[$key]);
        }
    }
}

/*=============================================
Si vienen más de 10 productos para ser mostrados
=============================================*/
if (count($hotProducts) > 10) {
    $random = rand(0, (count($hotProducts) - 10));
    $hotProducts = array_slice($hotProducts, $random, 10);
}

?>

<div class="ps-deal-hot">

    <div class="container">

        <div class="row">

            <?php foreach ($hotProducts as $key => $value): ?>
                <!--=====================================
			    Column Deal Hot
    		    ======================================-->
                <div class="col-xl-9 col-12 ">

                    <div class="ps-block--deal-hot" data-mh="dealhot">

                        <div class="ps-block__header">

                            <h3>Deal hot today</h3>

                            <div class="ps-block__navigation">
                                <a class="ps-carousel__prev" href=".ps-carousel--deal-hot">
                                    <i class="icon-chevron-left"></i>
                                </a>
                                <a class="ps-carousel__next" href=".ps-carousel--deal-hot">
                                    <i class="icon-chevron-right"></i>
                                </a>
                            </div>

                        </div>

                        <div class="ps-product__content">

                            <div class="ps-carousel--deal-hot ps-carousel--deal-hot owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">

                                <!--=====================================
    						Product Deal Home
    						======================================-->

                                <div class="ps-product--detail ps-product--hot-deal">

                                    <div class="ps-product__header">

                                        <div class="ps-product__thumbnail" data-vertical="true">

                                            <figure>

                                                <div class="ps-wrapper">

                                                    <div class="ps-product__gallery" data-arrow="true">

                                                        <div class="item">
                                                            <a href="img/products/deal-hot/a-1.jpg">
                                                                <img src="img/products/deal-hot/a-1.jpg" alt="">
                                                            </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="img/products/deal-hot/a-2.jpg">
                                                                <img src="img/products/deal-hot/a-2.jpg" alt="">
                                                            </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="img/products/deal-hot/a-3.jpg">
                                                                <img src="img/products/deal-hot/a-3.jpg" alt="">
                                                            </a>
                                                        </div>

                                                    </div>

                                                    <div class="ps-product__badge">
                                                        <span>Save <br> $280.000</span>
                                                    </div>

                                                </div>

                                            </figure>

                                            <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">

                                                <div class="item">
                                                    <img src="img/products/deal-hot/a-1.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="img/products/deal-hot/a-2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="img/products/deal-hot/a-3.jpg" alt="">
                                                </div>

                                            </div>

                                        </div>

                                        <div class="ps-product__info">

                                            <h5>Clothing & Apparel</h5>

                                            <h3 class="ps-product__name">Herschel Leather Duffle Bag In Brown Color</h3>

                                            <div class="ps-product__meta">

                                                <h4 class="ps-product__price sale">$36.78 <del> $56.99</del></h4>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">

                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>

                                                    </select>

                                                    <span>(1 review)</span>

                                                </div>

                                                <div class="ps-product__specification">

                                                    <p>Status:<strong class="in-stock"> In Stock</strong></p>

                                                </div>

                                            </div>

                                            <div class="ps-product__expires">

                                                <p>Expires In</p>

                                                <ul class="ps-countdown" data-time="July 21, 2020 23:00:00">

                                                    <li><span class="days"></span>
                                                        <p>Days</p>
                                                    </li>

                                                    <li><span class="hours"></span>
                                                        <p>Hours</p>
                                                    </li>

                                                    <li><span class="minutes"></span>
                                                        <p>Minutes</p>
                                                    </li>

                                                    <li><span class="seconds"></span>
                                                        <p>Seconds</p>
                                                    </li>

                                                </ul>

                                            </div>

                                            <div class="ps-product__processs-bar">

                                                <div class="ps-progress" data-value="10">
                                                    <span class="ps-progress__value"></span>
                                                </div>

                                                <p><strong>4/79</strong> Sold</p>

                                            </div>

                                        </div>

                                    </div>

                                </div><!-- End Product Deal Hot -->

                                <!--=====================================
    						Product Deal Home
    						======================================-->

                                <div class="ps-product--detail ps-product--hot-deal">

                                    <div class="ps-product__header">

                                        <div class="ps-product__thumbnail" data-vertical="true">

                                            <figure>

                                                <div class="ps-wrapper">

                                                    <div class="ps-product__gallery" data-arrow="true">

                                                        <div class="item">
                                                            <a href="img/products/deal-hot/b-1.jpg">
                                                                <img src="img/products/deal-hot/b-1.jpg" alt="">
                                                            </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="img/products/deal-hot/b-2.jpg">
                                                                <img src="img/products/deal-hot/b-2.jpg" alt="">
                                                            </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="img/products/deal-hot/b-3.jpg">
                                                                <img src="img/products/deal-hot/b-3.jpg" alt="">
                                                            </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="img/products/deal-hot/b-4.jpg">
                                                                <img src="img/products/deal-hot/b-4.jpg" alt="">
                                                            </a>
                                                        </div>

                                                    </div>

                                                    <div class="ps-product__badge">
                                                        <span>Save <br> $9.000</span>
                                                    </div>

                                                </div>

                                            </figure>

                                            <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">

                                                <div class="item">
                                                    <img src="img/products/deal-hot/b-1.jpg" alt="">
                                                </div>

                                                <div class="item">
                                                    <img src="img/products/deal-hot/b-2.jpg" alt="">
                                                </div>

                                                <div class="item">
                                                    <img src="img/products/deal-hot/b-3.jpg" alt="">
                                                </div>

                                                <div class="item">
                                                    <img src="img/products/deal-hot/b-4.jpg" alt="">
                                                </div>

                                            </div>

                                        </div>

                                        <div class="ps-product__info">

                                            <h5>Consumer Electrics</h5>

                                            <h3 class="ps-product__name">Evolution Sport Drilled and Slotted Brake Kit</h3>

                                            <div class="ps-product__meta">

                                                <h4 class="ps-product__price sale">$97.78 <del> $156.99</del></h4>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">

                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>

                                                    </select>
                                                    <span>(1 review)</span>

                                                </div>

                                                <div class="ps-product__specification">

                                                    <p>Status:<strong class="in-stock"> In Stock</strong></p>

                                                </div>

                                            </div>

                                            <div class="ps-product__expires">

                                                <p>Expires In</p>

                                                <ul class="ps-countdown" data-time="July 21, 2020 23:00:00">

                                                    <li><span class="days"></span>
                                                        <p>Days</p>
                                                    </li>

                                                    <li><span class="hours"></span>
                                                        <p>Hours</p>
                                                    </li>

                                                    <li><span class="minutes"></span>
                                                        <p>Minutes</p>
                                                    </li>

                                                    <li><span class="seconds"></span>
                                                        <p>Seconds</p>
                                                    </li>

                                                </ul>

                                            </div>

                                            <div class="ps-product__processs-bar">

                                                <div class="ps-progress" data-value="60">
                                                    <span class="ps-progress__value"></span>
                                                </div>

                                                <p><strong>30/50</strong> Sold</p>

                                            </div>

                                        </div>

                                    </div>

                                </div><!-- End Product Deal Hot -->

                            </div><!-- End carousel Deal Hot -->

                        </div><!-- End product content Deal Hot -->

                    </div><!-- End deal hot -->

                </div><!-- End Columns -->
            <?php endforeach ?>

        </div>

    </div>

</div><!-- End Home Deal Hot -->