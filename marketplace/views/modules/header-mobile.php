<header class="header header--mobile" data-sticky="true">

    <div class="header__top">

        <div class="header__left">

            <ul class="d-flex justify-content-center">
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f mr-4"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram mr-4"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter mr-4"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-youtube mr-4"></i></a></li>
            </ul>
        </div>

        <div class="header__right">

            <ul class="navigation__extra">

                <li><a href="#">Sell on MarketPlace</a></li>
                <li><a href="#">Store List</a></li>
                <li><i class="icon-telephone"></i> Hotline:<strong> 1-800-234-5678</strong></li>

                <li>

                    <div class="ps-dropdown language"><a href="#"><img src="img/template/en.png" alt="">English</a>

                        <ul class="ps-dropdown-menu">

                            <li><a href="#"><img src="img/template/es.png" alt=""> Español</a></li>

                        </ul>

                    </div>

                </li>

            </ul>

        </div>

    </div>

    <div class="navigation--mobile">

        <div class="navigation__left">

            <!--=====================================
			Menu Mobile
			======================================-->

            <div class="menu--product-categories">

                <div class="ps-shop__filter-mb mt-4" id="filter-sidebar">
                    <i class="icon-menu "></i>
                </div>

                <div class="ps-filter--sidebar">

                    <div class="ps-filter__header">
                        <h3>Categories</h3><a class="ps-btn--close ps-btn--no-boder" href="#"></a>
                    </div>

                    <div class="ps-filter__content">

                        <aside class="widget widget_shop">

                            <ul class="ps-list--categories">

                                <?php foreach ($menuCategories as $key => $value): ?>

                                    <li class="current-menu-item menu-item-has-children">

                                        <a href="<?php echo $path . $value->url_category ?>">
                                            <?php echo $value->name_category ?>
                                        </a>

                                        <span class="sub-toggle">
                                            <i class="fa fa-angle-down"></i>
                                        </span>

                                        <ul class="sub-menu" style="display: none;">

                                            <!--=====================================
                                        Traer las subcategorías
                                        ======================================-->

                                            <?php

                                            $url = CurlController::api() . "subcategories?linkTo=id_category_subcategory&equalTo=" . rawurlencode($value->id_category);
                                            $method = "GET";
                                            $fields = array();
                                            $header = array();

                                            $menuSubcategories = CurlController::request($url, $method, $fields, $header)->results;

                                            ?>

                                            <?php foreach ($menuSubcategories as $key => $value): ?>

                                                <li class="current-menu-item ">
                                                    <a href="<?php echo $path . $value->url_subcategory ?>"><?php echo $value->name_subcategory ?></a>
                                                </li>

                                            <?php endforeach ?>

                                        </ul>
                                    </li>

                                <?php endforeach ?>

                            </ul>

                        </aside>

                    </div>

                </div>

            </div><!-- End menu-->

            <a class="ps-logo pl-3 pl-sm-5" href="/">
                <img src="img/template/logo_light.png" class="pt-3" alt="">
            </a>

        </div>

        <div class="navigation__right">

            <div class="header__actions">

                <!--=====================================
				Cart
				======================================-->

                <div class="ps-cart--mini">

                    <a class="header__extra" href="#">
                        <i class="icon-bag2"></i><span><i>0</i></span>
                    </a>

                    <div class="ps-cart__content">

                        <div class="ps-cart__items">

                            <div class="ps-product--cart-mobile">

                                <div class="ps-product__thumbnail">
                                    <a href="#">
                                        <img src="img/products/clothing/7.jpg" alt="">
                                    </a>
                                </div>

                                <div class="ps-product__content">

                                    <a class="ps-product__remove" href="#">
                                        <i class="icon-cross"></i>
                                    </a>

                                    <a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                    <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                    <small>1 x $59.99</small>

                                </div>

                            </div>

                            <div class="ps-product--cart-mobile">

                                <div class="ps-product__thumbnail">

                                    <a href="#"><img src="img/products/clothing/5.jpg" alt=""></a>

                                </div>

                                <div class="ps-product__content">
                                    <a class="ps-product__remove" href="#">
                                        <i class="icon-cross"></i>
                                    </a>
                                    <a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                    <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                    <small>1 x $59.99</small>

                                </div>

                            </div>

                        </div>

                        <div class="ps-cart__footer">

                            <h3>Sub Total:<strong>$59.99</strong></h3>

                            <figure>
                                <a class="ps-btn" href="shopping-cart.html">View Cart</a>
                                <a class="ps-btn" href="checkout.html">Checkout</a>
                            </figure>

                        </div>

                    </div>

                </div>

                <!--=====================================
				Login and Register
				======================================-->

                <div class="ps-block--user-header">

                    <div class="ps-block__left">
                        <i class="icon-user"></i>
                    </div>
                    <div class="ps-block__right">
                        <a href="my-account.html">Login</a>
                        <a href="my-account.html">Register</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--=====================================
	Search
	======================================-->

    <div class="ps-search--mobile">

        <form class="ps-form--search-mobile">
            <div class="form-group--nest">
                <input class="form-control inputSearch" type="text" placeholder="Search something...">
                <button type="button" class="btnSearch" path="<?php echo $path ?>"><i class="icon-magnifier"></i></button>
            </div>
        </form>

    </div>

</header> <!-- End Header Mobile -->