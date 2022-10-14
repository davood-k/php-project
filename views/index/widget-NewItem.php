<div class="row">
    <div class="col-12">
        <div class="widget widget-product card">
            <header class="card-header">
                <h3 class="card-title">
                    <span>جدیدترین ها</span>
                </h3>
                <a href=http://ehsanghasimi.ir/ class="view-all">مشاهده همه</a>
            </header>
            <div class="product-carousel owl-carousel owl-theme">
                <?php
                $newItem = $data[5];
                foreach ($newItem as $item) {

                    ?>
                    <div class="item">
                        <a href=product/index/<?= $item['id'];?>>
                            <img src="public/img/product/<?= $item['id'] ?>/product220.jpg"
                                 class="img-fluid" alt="">
                        </a>
                        <h2 class="post-title">
                            <a href=http://ehsanghasimi.ir/><span><?= $item['title'] ?></a>
                        </h2>
                        <div class="price">
                            <ins><span><?= $item['price'] ?><span>تومان</span></span></ins>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

