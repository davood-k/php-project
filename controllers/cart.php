<?php

class Cart extends Controller
{
    function __construct()
    {

    }

    function index()
    {
        $this->veiw('cart/index');
    }
}

?>