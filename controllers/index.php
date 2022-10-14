<?php

class Index extends Controller
{
    function __construct()
    {


    }

    function index()
    {
        $slider1 = $this->model->getSlider1();
        $slider2 = $this->model->getSlider2();
        $onlydigikala = $this->model->onlydigikala();
        $mostviewed = $this->model->mostviewed();
        $LastProduct = $this->model->LastProduct();
        
        $slider2_items = $slider2[0];
        $date_end = $slider2[1];

        $data = [$slider1, $slider2_items, $date_end, $mostviewed, $onlydigikala , $LastProduct];
        $this->veiw('index/index', $data);
    }


}

?>