
<div class="row">
    <div class="col-12">
        <div class="widget widget-product card">
            <header class="card-header">
                <h3 class="card-title">
                    <span>پر بازدیدترین ها</span>
                </h3>
                <a href=http://ehsanghasimi.ir/ class="view-all">مشاهده همه</a>
            </header>
            <div class="product-carousel owl-carousel owl-theme">
                <?php
                $attr= $data[3];
                $attr = is_array($attr) ? $attr : array($attr);
                foreach ($attr as $row) {

                   ?>
                    <div class="item">
                        <a href=product/index/<?= $row['id'];?>>
                            <img style="width: 150px;" src="public/img/amazing-slider/<?= $row['id'] ?>/product220.jpg"
                                 class="img-fluid" alt="">
                        </a>
                        <h2 class="post-title">
                            <a href=><?= $row['title'] ?></a>
                        </h2>
                        <div class="price">
                            <div class="text-center">
                                <ins><span><?= $row['price'] ?><span>
                                             تومان
                                        </span></span></ins>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
