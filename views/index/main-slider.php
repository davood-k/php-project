
<div class="col-12 col-lg-9 order-1 order-lg-2">
    <section id="main-slider" class="carousel slide carousel-fade card" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            <li data-target="#main-slider" data-slide-to="3"></li>
        </ol>
        <div id="home-carousel" class="carousel-inner">

            <?php
            $slider1 = $data[0];
            foreach ($slider1 as $item) {
                ?>
                <div class="carousel-item newcar">
                    <a class="d-block" href=<?= $item['link']; ?>>
                        <img src="public/img/slider/<?= $item['img']; ?>" class="d-block w-100" alt="">
                    </a>
                </div>
                <?php
             }
            ?>
        </div>
        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
            <i class="now-ui-icons arrows-1_minimal-right"></i>
        </a>
        <a class="carousel-control-next" href="#main-slider" data-slide="next">
            <i class="now-ui-icons arrows-1_minimal-left"></i>
        </a>
    </section> 
    <script>
        $(document).ready(function () {
            $('.newcar:first').addClass("active");
        })
    </script>