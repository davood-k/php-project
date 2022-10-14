<body>

<div class="wrapper default shopping-page">
    <!-- header-shopping -->
    <header class="header-shopping default">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-2">
                    <div class="header-shopping-logo default">
                        <a href="#">
                            <img src="public/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-12 text-center" style="z-index: 1;">
                    <ul class="checkout-steps">
                        <li>
                            <a href="shopping.html" class="active">
                                <span>اطلاعات ارسال</span>
                            </a>
                        </li>
                        <li>
                            <a href="shopping-payment.html">
                                <span>پرداخت</span>
                            </a>
                        </li>
                        <li>
                            <a href="shopping-complete-buy.html">
                                <span>اتمام خرید و ارسال</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header-shopping -->

    <!-- main-shopping -->
        <main class="cart-page default">
            <div class="container">
                <div class="row">
                    <div class="cart-page-content col-xl-9 col-lg-8 col-md-12 order-1">
                        <div class="cart-page-title">
                            <h1>انتخاب آدرس تحویل سفارش</h1>
                        </div>

                        <section class="page-content default">

                            <?php require ('address-section.php'); ?>

                            <?php require ('shipping-data-post.php'); ?>

                        </section>
                    </div>

                    <?php require ('cart-page-aside.php'); ?>

                </div>
            </div>
        </main>
        <!-- main-shopping -->
