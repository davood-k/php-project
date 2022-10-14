<?php

class model_index extends Model
{
    function __construct()
    {
    parent::__construct();
    }

    function getSlider1()
    {
        $sql = 'select * from tbl_slider ';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getSlider2()
    {
        $sql = 'select * from tbl_product where special=? ';
        $result = $this->doSelect($sql,[1]);
        foreach ($result as $key=>$row) {
            $price_total=$this->clculateDiscount($row['price'],$row['discount'])[1];
            $result [$key]['price_total']=$price_total;
        }
        $first_row = $result[0];
        $time_special = $first_row['time_special'];

        $sql = 'select * from tbl_option where setting="special_time" ';
        $result2 = $this->doSelect($sql,[],1);
        $duration_special = $result2['value'];

        $time_end = $time_special + $duration_special;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s', $time_end);

        return [$result, $date];
    }
    function onlydigikala(){
        $sql = 'select * from tbl_product where onlydigikala=1 ';
        $result = $this->doSelect($sql);
        return $result;
    }
    function mostviewed(){
        $sql = 'select * from tbl_option where setting="limitslider" ';
        $result = $this->doSelect($sql,[],1);
        $limit = $result['value'];


        $sql = 'select * from tbl_product order by viewed desc limit '.$limit.'';
        $result = $this->doSelect($sql);
        return $result;
    }
    function LastProduct(){
        $sql = 'select * from tbl_option where setting="limitslider" ';
        $result = $this->doSelect($sql,[],1);
        $limit = $result['value'];

        $sql = 'select * from tbl_product order by id desc limit '.$limit.' ';
        $result = $this->doSelect($sql);
        return $result;
    }
}