<?php
$option= Model::getOption();

?>

<footer class="main-footer default">
    <div class="back-to-top">
        <a href=http://ehsanghasimi.ir/><span class="icon"><i class="now-ui-icons arrows-1_minimal-up"></i></span>
            <span>بازگشت به
                        بالا</span></a>
    </div>
    <div class="container">
        <div class="footer-services">
            <div class="row">
                <div class="service-item col">
                    <a href=http://ehsanghasimi.ir/ target="_blank">
                        <img src="public/img/svg/delivery.svg">
                    </a>
                    <p>تحویل اکسپرس</p>
                </div>
                <div class="service-item col">
                    <a href=http://ehsanghasimi.ir/ target="_blank">
                        <img src="public/img/svg/contact-us.svg">
                    </a>
                    <p>پشتیبانی 24 ساعته</p>
                </div>
                <div class="service-item col">
                    <a href=http://ehsanghasimi.ir/ target="_blank">
                        <img src="public/img/svg/payment-terms.svg">
                    </a>
                    <p>پرداخت درمحل</p>
                </div>
                <div class="service-item col">
                    <a href=http://ehsanghasimi.ir/ target="_blank">
                        <img src="public/img/svg/return-policy.svg">
                    </a>
                    <p>۷ روز ضمانت بازگشت</p>
                </div>
                <div class="service-item col">
                    <a href=http://ehsanghasimi.ir/ target="_blank">
                        <img src="public/img/svg/origin-guarantee.svg">
                    </a>
                    <p>ضمانت اصل بودن کالا</p>
                </div>
            </div>
        </div>
        <div class="footer-widgets">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="widget-menu widget card">
                        <header class="card-header">
                            <h3 class="card-title">راهنمای خرید از دیجی کالا</h3>
                        </header>
                        <ul class="footer-menu">
                            <li>
                                <a href=http://ehsanghasimi.ir/>نحوه ثبت سفارش</a>
                            </li>
                            <li>
                                <a href=http://ehsanghasimi.ir/>رویه ارسال سفارش</a>
                            </li>
                            <li>
                                <a href=http://ehsanghasimi.ir/>شیوه‌های پرداخت</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="widget-menu widget card">
                        <header class="card-header">
                            <h3 class="card-title">خدمات مشتریان</h3>
                        </header>
                        <ul class="footer-menu">
                            <li>
                                <a href=http://ehsanghasimi.ir/>پاسخ به پرسش‌های متداول</a>
                            </li>
                            <li>
                                <a href=http://ehsanghasimi.ir/>رویه‌های بازگرداندن کالا</a>
                            </li>
                            <li>
                                <a href=http://ehsanghasimi.ir/>شرایط استفاده</a>
                            </li>
                            <li>
                                <a href=http://ehsanghasimi.ir/>حریم خصوصی</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="widget-menu widget card">
                        <header class="card-header">
                            <h3 class="card-title">با دیجی کالا</h3>
                        </header>
                        <ul class="footer-menu">
                            <li>
                                <a href=http://ehsanghasimi.ir/>فروش در دیجی کالا</a>
                            </li>
                            <li>
                                <a href=http://ehsanghasimi.ir/>همکاری با سازمان‌ها</a>
                            </li>
                            <li>
                                <a href=http://ehsanghasimi.ir/>فرصت‌های شغلی</a>
                            </li>
                            <li>
                                <a href=http://ehsanghasimi.ir/>تماس با دیجی کالا</a>
                            </li>
                            <li>
                                <a href=http://ehsanghasimi.ir/>درباره دیجی کالا</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="newsletter">
                        <p>از تخفیف‌ها و جدیدترین‌های فروشگاه باخبر شوید:</p>
                        <form action="">
                            <input type="email" class="form-control"
                                   placeholder="آدرس ایمیل خود را وارد کنید...">
                            <input type="submit" class="btn btn-primary" value="ارسال">
                        </form>
                    </div>
                    <div class="socials">
                        <p>ما را در شبکه های اجتماعی دنبال کنید.</p>
                        <div class="footer-social">
                            <a href=http://ehsanghasimi.ir/ target="_blank"><i class="fa fa-instagram"></i>اینستاگرام
                                دیجی کالا</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <span>هفت روز هفته ، 24 ساعت شبانه‌روز پاسخگوی شما هستیم.</span>
                </div>
                <div class="col-12 col-lg-2">شماره تماس: <?= $option['number']; ?></div>
                <div class="col-12 col-lg-3">آدرس ایمیل:<a href=http://ehsanghasimi.ir/><?= $option['gmail']; ?></a></div>
                <div class="col-12 col-lg-4 text-center">
                    <a href=http://ehsanghasimi.ir/ target="_blank"><img src="public/img/bazzar.png" width="159"
                                                                         height="48"
                                                                         alt=""></a>
                    <a href=http://ehsanghasimi.ir/ target="_blank"><img src="public/img/sibapp.png" width="159"
                                                                         height="48"
                                                                         alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="description">
        <div class="container">
            <div class="row">
                <div class="site-description col-12 col-lg-7">
                    <h1 class="site-title">فروشگاه اینترنتی دیجی کالا، بررسی، انتخاب و خرید آنلاین</h1>
                    <p>
                        دیجی کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با
                        پایبندی به سه اصل کلیدی، پرداخت در
                        محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا، موفق شده تا همگام با فروشگاه‌های
                        معتبر جهان، به بزرگ‌ترین فروشگاه
                        اینترنتی ایران تبدیل شود. به محض ورود به دیجی کالا با یک سایت پر از کالا رو به رو
                        می‌شوید! هر آنچه که نیاز دارید و به
                        ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.
                    </p>
                </div>
                <div class="symbol col-12 col-lg-5">
                    <a href=http://ehsanghasimi.ir/ target="_blank"><img src="public/img/symbol-01.png" alt=""></a>
                    <a href=http://ehsanghasimi.ir/ target="_blank"><img src="public/img/symbol-02.png" alt=""></a>
                </div>
                <div class="col-12">
                    <div class="row">
                        <ul class="footer-partners default">
                            <li class="col-md-3 col-sm-6">
                                <a href=""><img src="public/img/footer/1.svg" alt=""></a>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <a href=""><img src="public/img/footer/2.svg" alt=""></a>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <a href=""><img src="public/img/footer/3.svg" alt=""></a>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <a href=""><img src="public/img/footer/4.svg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>
                استفاده از مطالب فروشگاه اینترنتی دیجی کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.
                کلیه حقوق این سایت متعلق
                به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی کالا) می‌باشد.
            </p>
        </div>
    </div>
</footer>
</div>
</body>
<!--   Core JS Files   -->
<script src="public/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="public/js/core/popper.min.js" type="text/javascript"></script>
<script src="public/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="public/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="public/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="public/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="public/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="public/js/now-ui-kit.js" type="text/javascript"></script>
<!--  CountDown -->
<script src="public/js/plugins/countdown.min.js" type="text/javascript"></script>
<!--  Plugin for Sliders -->
<script src="public/js/plugins/owl.carousel.min.js" type="text/javascript"></script>
<!--  Jquery easing -->
<script src="public/js/plugins/jquery.easing.1.3.min.js" type="text/javascript"></script>
<!--  Plugin ez-plus -->
<script src="public/js/plugins/jquery.ez-plus.js" type="text/javascript"></script>
<!-- Main Js -->
<script src="public/js/main.js" type="text/javascript"></script>

</html>