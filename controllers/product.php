<?php

class Product extends Controller
{
    function __construct()
    {

    }

    function index($id)
    {
        $productInfo = $this->model->productInfo($id);
        $productFanni = $this->model->fanni($id);
        $data = [$productInfo];
        $this->veiw('product/index',$data);
    }

}
?>
