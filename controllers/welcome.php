<?php

class Welcome extends Controller
{
    function __construct()
    {

    }

    function index()
    {
        $this->vother('welcome/index');
    }
}

?>