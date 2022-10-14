<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "laravel";


//$conn = new mysqli($servername, $username, $password, $dbname);

//$product = 'USER';
//$le = 2;
//$sql = 'insert into users (level,name) values (?,?)';
//$stmt = $conn->prepare($sql);
//$stmt->bind_param('si', $product, $le);
//$stmt->execute();
////$sql= 'delete from users where id=4 ';
////$sql= 'update users set level="user" where id=4 ';
////$conn->query($sql);

////$sql= 'select * from users';
////$result= $conn->query($sql);
////while ($row= $result->fetch_array()){
////    print_r($row);
////    echo "</br>";
////    }
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "laravel";
//$conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "UTF8" '));
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//for insert;
//$ssa = 'select * from users where id=? and name=?';
//
//$stmt = $conn->prepare($ssa);
//
//$stmt->bindValue(1 , 1);
//$stmt->bindValue(2 , 'davood');
//
//$stmt->execute();
//$result= $stmt->fetchAll();
//foreach ($result as $item) {
//    print_r($item);
//    echo "</br>";
//}


//for update;
//$ssa = 'update users set level=? , name=? , email=? where id=?';
//
//$stmt = $conn->prepare($ssa);
//
//$stmt->bindValue(1 , 'admin');
//$stmt->bindValue(2 , 'sss');
//$stmt->bindValue(3 , 'aka@gmail.com');
//$stmt->bindValue(4 , '1');
//
//$stmt->execute();






?>



<body>
<div class="wrapper default">
    <div class="container">
        <div class="row">
            <div class="main-content col-12 col-md-7 col-lg-5 mx-auto">
                <div class="account-box">
                    <a href="#" class="logo">
                        <img src="public/img/logo.png" alt="">
                    </a>
                    <div class="account-box-title text-right">ورود به دیجی کالا</div>
                    <div class="account-box-content">
                        <form class="form-account">
                            <div class="form-account-title">ایمیل یا شماره موبایل</div>
                            <div class="form-account-row">
                                <label class="input-label"><i class="now-ui-icons users_single-02"></i></label>
                                <input class="input-field" type="text"
                                       placeholder="ایمیل یا شماره موبایل خود را وارد نمایید">
                            </div>
                            <div class="form-account-title">رمز عبور
                                <a href="" class="btn-link-border form-account-link">رمز
                                    عبور خود را فراموش
                                    کرده ام</a>
                            </div>
                            <div class="form-account-row">
                                <label class="input-label"><i
                                            class="now-ui-icons ui-1_lock-circle-open"></i></label>
                                <input class="input-field" type="password"
                                       placeholder="رمز عبور خود را وارد نمایید">
                            </div>
                            <div class="form-account-row form-account-submit">
                                <div class="parent-btn">
                                    <button class="dk-btn dk-btn-info">
                                        ورود به دیجی کالا
                                        <i class="fa fa-sign-in"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-account-agree">
                                <label class="checkbox-form checkbox-primary">
                                    <input type="checkbox" checked="checked" id="agree">
                                    <span class="checkbox-check"></span>
                                </label>
                                <label for="agree">مرا به خاطر داشته باش</label>
                            </div>
                        </form>
                    </div>
                    <div class="account-box-footer">
                        <span>کاربر جدید هستید؟</span>
                        <a href="#" class="btn-link-border">ثبت‌نام در
                            دیجی کالا</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
