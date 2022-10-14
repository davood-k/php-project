<section id="amazing-slider" class="carousel slide carousel-fade card" data-ride="carousel">
    <div class="row m-0">
        <ol class="carousel-indicators pr-0 d-flex flex-column col-lg-3">
            <?php
            $slider2 = $data[1];
            $date_end= $data[2];
            foreach ($slider2 as $item) {

                ?>
                <li class="active" data-target="#amazing-slider" data-slide-to="0">
                    <span> <?= $item['title'] ?></span>
                </li>
                <?php
            }

            ?>

            <li class="view-all">
                <a href=http://ehsanghasimi.ir/ class="btn btn-primary btn-block hvr-sweep-to-left">
                <i class="fa fa-arrow-left"></i>مشاهده همه شگفت انگیزها
                </a>
            </li>
        </ol>
        <div class="carousel-inner p-0 col-12 col-lg-9">
            <img class="amazing-title" src="public/img/amazing-slider/amazing-title-01.png" alt="">
            <?php
            $amazing=$data[1];
            foreach ($amazing as $item) {

            ?>
                <div class="carousel-item newcarousel">
                    <div class="row m-0">
                        <div class="right-col col-5 d-flex align-items-center">
                            <a class="w-100 text-center" href=product/index/<?= $item['id'];?>>
                                <img src="public/img/amazing-slider/<?= $item['id'] ?>/product220.jpg"
                                     class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="left-col col-7">
                            <div class="price">
                                <del><span><?= $item['price'] ?><span> تومان</span></span></del>
                                <ins><span><?= $item['price_total'] ?><span> تومان</span></span></ins>
                                <span class="discount-percent"> %<?= $item['discount'] ?> تخفيف</span>
                            </div>
                            <h2 class="product-title">
                                <a href=http://ehsanghasimi.ir/><?= $item['introduction'] ?></a>
                            </h2>
                            <ul class="list-group">
                                <li class="list-group-item">رنگ: مشکی</li>
                                <li class="list-group-item">160 گیگابایت</li>
                            </ul>
                            <hr>
                            <div class="countdown-timer" countdown data-date="25 09 2022 17:20:22">
                                <span data-days><?= $date_end ?></span>
                            </div>
                            <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('.newcarousel:first').addClass("active");
    })
</script>
