<?php

class model_product extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function productInfo($id)
    {
        $sql = 'select * from tbl_product where id=?';
        $result = $this->doSelect($sql, [$id], 1);

        $price = $result['price'];
        $discount = $result['discount'];
        $price_calculate = $this->clculateDiscount($price, $discount);
        $result ['price_discount'] = $price_calculate[0];
        $result ['price_total'] = $price_calculate[1];
        $colors = $result['colors'];
        $colors = explode(',', $colors);
        $colors = array_filter($colors);
        $all_colors = [];
        foreach ($colors as $color) {
            $colorInfo = $this->colorInfo($color);
            array_push($all_colors, $colorInfo);
        }
        $result['all_colors'] = $all_colors;
        return $result;
    }

    function colorInfo($id)
    {
        $sql = 'select * from tbl_color where id=?';
        $result = $this->doSelect($sql, [$id], 1);
        return $result;
    }

    function fanni($idcotegory)
    {
        $sql = 'select * from tbl_naghd where idcategory=? and parent=0';
        $result = $this->doselelct($sql, [$idcotegory]);
        print_r($result);
        foreach ($result as $key => $row) {
            $sql = 'select *from tbl_naghd where and parent=?';
            $params = [$row['id']];
            $result2 = $this->doselelct($sql, $params);
            $result [key] ['children'] = $result2;
        }
        return $result;
    }
}