<div class="row">
    <div class="col-12">
        <article class="product">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-gallery default">
                        <img class="zoom-img" id="img-product-zoom"
                             src="public/img/product/<?= $result['id']; ?>/product220.jpg"
                             data-zoom-image="public/img/product/<?= $result['id']; ?>/product220.jpg" width="411"/>

                        <div id="gallery_01f" style="width:500px;float:left;"مشخصات کلی
                        >
                            <ul class="gallery-items">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                       data-image="public/img/product/<?= $result['id']; ?>/product220.jpg"
                                       data-zoom-image="public/img/product/<?= $result['id']; ?>/product220.jpg">
                                        <img src="public/img/product/<?= $result['id']; ?>/product220.jpg" width="100"/></a>
                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery"
                                       data-image="public/img/product/3694075.jpg"
                                       data-zoom-image="public/img/product/<?= $result['id']; ?>/product220.jpg"><img
                                                src="public/img/product/<?= $result['id']; ?>/product220.jpg"
                                                width="100"/></a>
                                </li>
                                <li>
                                    <a href="tester" class="elevatezoom-gallery"
                                       data-image="public/img/product/1335154.jpg"
                                       data-zoom-image="public/img/product/<?= $result['id']; ?>/product220.jpg">
                                        <img src="public/img/product/<?= $result['id']; ?>/product220.jpg" width="100"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="tester" class="elevatezoom-gallery"
                                       data-image="public/img/product/110197298.jpg"
                                       data-zoom-image="public/img/product/110197298.jpg"
                                       class="slide-content"><img
                                                src="public/img/product/<?= $result['id']; ?>/product220                          .jpg"
                                                height="68"/></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="gallery-options">
                        <li>
                            <button class="add-favorites"><i class="fa fa-heart"></i></button>
                            <span class="tooltip-option">افزودن به علاقمندی</span>
                        </li>
                        <li>
                            <button data-toggle="modal" data-target="#myModal"><i class="fa fa-share-alt"></i></button>
                            <span class="tooltip-option">اشتراک گذاری</span>
                        </li>
                    </ul>
                    <!-- Modal Core -->
                    <div class="modal-share modal fade" id="myModal" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">

                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">اشتراک گذاری</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-share">
                                        <div class="form-share-title">اشتراک گذاری در شبکه های اجتماعی</div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="btn-group-share">
                                                    <li><a href="#" class="btn-share btn-share-twitter" target="_blank"><i
                                                                    class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" class="btn-share btn-share-facebook"
                                                           target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" class="btn-share btn-share-google-plus"
                                                           target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-share-title">ارسال به ایمیل</div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="ui-input ui-input-send-to-email">
                                                    <input class="ui-input-field" type="email"
                                                           placeholder="آدرس ایمیل را وارد نمایید.">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button class="btn-primary">ارسال</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <form class="form-share-url default">
                                        <div class="form-share-url-title">آدرس صفحه</div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="ui-url">
                                                    <input class="ui-url-field" value="https://www.digikala.com">
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Core -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-title default">
                        <h1>
                            <?= $result['title']; ?>
                            <span><?= $result['introduction']; ?></span></h1>
                    </div>
                    <div class="product-directory default">
                        <ul>
                            <li>
                                <span>برند</span> :
                                <span class="product-brand-title">متفرقه</span>
                            </li>
                            <li>
                                <span>دسته‌بندی</span> :
                                <a href="#" class="btn-link-border">
                                    ساعت هوشمند
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-variants default">
                        <span>انتخاب رنگ: </span>
                        <?php
                        $all_colors = $result['all_colors'];
                        foreach ($all_colors as $color) {
                            ?>
                            <div class="radio">
                                <input type="radio" name="radio<?= $color['id'] ?>" id="radio<?= $color['id'] ?>"
                                       value="option<?= $color['id'] ?>">
                                <label style="color:<?= $color['hex'] ?>;" for="radio<?= $color['id'] ?>">
                                    <?= $color['title'] ?>
                                </label>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <!--                    <div class="product-guarantee default">-->
                    <!--                        <i class="fa fa-check-circle"></i>-->
                    <!--                        <p class="product-guarantee-text">-->
                    <!--                            گارانتی اصالت و سلامت فیزیکی کالا-->
                    <!--                        </p>-->
                    <!--                    </div>-->
                    <div class="box">
                        <div class="box-header">
                            <div class="box-toggle" data-toggle="collapse" href="#collapseExample1" role="button"
                                 aria-expanded="true" aria-controls="collapseExample1">
                                دسته بندی نتایج
                                <i class="now-ui-icons arrows-1_minimal-down"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="collapse" id="collapseExample1">
                                1335154
                                <div class="filter-option">
                                    <div class="checkbox">
                                        <input id="checkbox6" type="checkbox">
                                        <label for="checkbox6">
                                            توتو
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox7" type="checkbox">
                                        <label for="checkbox7">
                                            فراری
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-delivery-seller default">
                        <p>
                            <i class="now-ui-icons shopping_shop"></i>
                            <span>فروشنده:‌</span>
                            <a href="#" class="btn-link-border">ناسا</a>
                        </p>
                    </div>
                    <div class="price-product defualt">
                        <div class="price-value">
                            <span> <?= $result['price_total'] ?> </span>
                            <span class="price-currency">تومان</span>
                        </div>
                        <div class="price-discount" data-title="تخفیف">
                                            <span>
                                                <?= $result['discount'] ?>
                                            </span>
                            <span>%</span>
                        </div>
                    </div>
                    <div class="product-add default">
                        <div class="parent-btn">
                            <a href="#" class="dk-btn dk-btn-info">
                                افزودن به سبد خرید
                                <i class="now-ui-icons shopping_cart-simple"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 center-breakpoint">
                    <div class="product-guaranteed default">
                        بیش از ۱۸۰ نفر از خریداران این محصول را پیشنهاد داده‌اند
                    </div>
                    <div class="product-params default">
                        <ul data-title="ویژگی‌های محصول">
                            <li>
                                <span>حافظه داخلی: </span>
                                <span> 256 گیگابایت </span>
                            </li>
                            <li>
                                <span>شبکه های ارتباطی: </span>
                                <span> 2G,3G,4G </span>
                            </li>
                            <li>
                                <span>رزولوشن عکس: </span>
                                <span> 12.0 مگاپیکسل</span>
                            </li>
                            <li>
                                <span>تعداد سیم کارت: </span>
                                <span> تک </span>
                            </li>
                            <li>
                                <span>ویژگی‌های خاص: </span>
                                <span> مقاوم در برابر آب
                                                    مناسب عکاسی
                                                    مناسب عکاسی سلفی
                                                    مناسب بازی
                                                    مجهز به حس‌گر تشخیص چهره
                                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>