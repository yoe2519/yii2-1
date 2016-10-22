<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
//use frontend\assets\AppAsset;
use common\widgets\Alert;
//use frontend\assets\MaterialAsset;
use frontend\themes\respond\respondAsset;

//AppAsset::register($this);
//MaterialAsset::register($this);
respondAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<title>HangChat District : อำเภอห้างฉัตร จังหวัดลำปาง</title>
<meta charset="<?= Yii::$app->charset ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../themes/respond/assets/css/bootstrap.css" rel="stylesheet">
<link href="../themes/respond/assets/css/bootstrap-responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<!--
<style>
        body{
            -webkit-filter: grayscale(1);
	        filter: grayscale(1);
	    }
	    </style>
-->
</head>
<body>
<?php $this->beginBody() ?>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
        </a> 
        <!-- <a class="brand" href="main.php"><span class="color-highlight">R</span>espond 1.5</a> -->
        <a class="brand" href="../web/index.php"><span class="color-highlight">H</span>angChat District</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="active"><a href="../web/index.php">หน้าแรก</a></li>
          <li><a href="../themes/respond/views/layouts/general-02.html">บุคลากร</a></li>
          <li><a href="../themes/respond/views/layouts/portfolio.html">ผลงาน</a></li>
          <li><a href="../themes/respond/views/layouts/contact.html">ติดต่อ</a></li>
          <li><a href="../themes/respond/views/layouts/about.html">เกี่ยวกับ</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</div>
<div class="container">
  <!--Start Carousel-->
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active"> <img src="../themes/respond/assets/img/featured/1.png" alt="">
        <div class="carousel-caption">
          <h4>ที่ว่าการอำเภอห้างฉัตร จังหวัดลำปาง</h4>
          <p>ที่ว่าการอำเภอห้างฉัตร ถนนลำปาง-เชียงใหม่ ตำบลเวียงตาล อำเภอห้างฉัตร จังหวัดลำปาง 52190 โทรศัพท์ 054-269323</p>
        </div>
      </div>
      <div class="item"> <img src="../themes/respond/assets/img/featured/2.png" alt="">
        <div class="carousel-caption">
          <h4>หนึ่งตำบลหนึ่งผลิตภัณฑ์</h4>
          <p>กลุ่มหัตถกรรมเซรามิค ต.ปงยางคก, กลุ่มผลิตภัณฑ์สมุนไพร ต.เมืองยาว, กลุ่มผลิตภัณฑืเห็ดโคนน้อยดอง ต.วอแก้ว, กลุ่มผลิตภัณฑ์เครื่องหนัง ต.หนองหล่ม, กลุ่มผลิตภัณฑ์กะลามะพร้าว ต.เวียงตาล, กลุ่มเย็บรองเท้า ต.เวียงตาล และ กลุ่มทำเครื่องเงิน ต.เวียงตาล</p>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="../themes/respond/assets/img/arrow.png" alt=""></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="../themes/respond/assets/img/arrow2.png" alt=""></a> </div>
  <!--End Carousel-->
  <hr>
  <div class="row">
    <div class="span4">
      <h3>ภูมิศาสตร์<small> By <a href="#">administrator</a></small></h3>
      <a rel="lightbox" href="../themes/respond/assets/img/thumb1.png"><img src="../themes/respond/assets/img/thumb1.png" alt=""></a> </div>
    <div class="span4">
      <h3>สถานีรถไฟขุนตาล<small> By <a href="#">administrator</a></small></h3>
      <a rel="lightbox" href="../themes/respond/assets/img/thumb2.png"><img src="../themes/respond/assets/img/thumb2.png" alt=""></a> </div>
    <div class="span4">
      <h3>รายละเอียด</h3>
      <blockquote><strong>วิสัยทัศน์อำเภอห้างฉัตร</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ห้างฉัตรร่มเย็น&nbsp;&nbsp;เป็นเมืองแหล่งวัฒนธรรม <br>นำเรื่องเศรษฐกิจ &nbsp;&nbsp;ปลอดยาเสพติดทุกชุมชน <br>ทุกคนร่วมพัฒนา&nbsp;&nbsp; พาสู่คุณภาพชีวิตที่ดี <br>
        <br>
        <em>- คณะกรรมการบริหารงานอำเภอห้างฉัตร</em> </blockquote>
      <p><a class="btn" href="../themes/respond/views/layouts/general-01.html">ข้อมูลสภาพทั่วไป &raquo;</a></p>
    </div>
  </div>
  <!--Start second row of columns-->
  <hr>
  <div class="row">
    <div class="span6 thumb-list"> <a rel="lightbox" href="../themes/respond/assets/img/thumb-small01.png"><img src="../themes/respond/assets/img/thumb-small01.png" alt=""></a>
      <h3><a href="../themes/respond/views/layouts/general-03.html">ข้อมูลสภาพทั่วไป</a></h3>
      <p>อำเภอห้างฉัตร ตั้งอยู่ทางทิศตะวันตกของจังหวัดลำปาง ห่างจากจังหวัดลำปาง ระยะทาง 17 กิโลเมตร มีพื้นที่ทั้งหมด 429,819 ไร่ หรือ 687.71 ตารางกิโลเมตร เป็นพื้นที่ป่าประมาณ 181,051 ไร่ หรือร้อยละ 42 ของพื้นที่ทั้งหมด เป็นพื้นที่ที่อยู่อาศัยและเพื่อการเกษตรประมาณ 248,765 ไร่ หรือร้อยละ 58 ของพื้นที่ทั้งหมด</p>
    </div>
    <div class="span6 thumb-list"> <a rel="lightbox" href="../themes/respond/assets/img/thumb-small02.png"><img src="../themes/respond/assets/img/thumb-small02.png" alt=""></a>
      <h3><a href="../themes/respond/views/layouts/general-04.html">ประชากร</a></h3>
      <p>อำเภอห้างฉัตร :: ชาย :: 24,865 , :: หญิง :: 26,154 , :: รวม :: 51,019 , :: จำนวนบ้าน :: 19,698</p>
      <a href="../themes/respond/views/layouts/general-04.html" class="btn">รายละเอียด</a> </div>
  </div>
  <div class="row">
    <div class="span6 thumb-list"> <a rel="lightbox" href="../themes/respond/assets/img/thumb-small01.png"><img src="../themes/respond/assets/img/thumb-small01.png" alt=""></a>
      <h3><a href="#">This Should Be Your Title.</a></h3>
      <p>This will be the description or something I guess. I don't know. Your choice.</p>
      <a href="#" class="btn">Details</a> </div>
    <div class="span6 thumb-list"> <a rel="lightbox" href="../themes/respond/assets/img/thumb-small02.png"><img src="../themes/respond/assets/img/thumb-small02.png" alt=""></a>
      <h3><a href="#">This Should Be Your Title.</a></h3>
      <p>This will be the description or something I guess. I don't know. Your choice.</p>
      <a href="#" class="btn">Details</a> </div>
  </div>
  <hr>
  <footer class="row">
    <div>
      <div class="span4">
        <div class="is-padded">
          <nav>
            <h2>การนำทาง</h2>
            <hr>
            <ul>
              <li><a href="../web/index.php">หน้าแรก</a></li>
              <li><a href="../themes/respond/views/layouts/general-02.html">บุคลากร</a></li>
              <li><a href="../themes/respond/views/layouts/portfolio.html">ผลงาน</a></li>
              <li><a href="../themes/respond/views/layouts/contact.html">ติดต่อ</a></li>
              <li><a href="../themes/respond/views/layouts/about.html">เกี่ยวกับ</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="span4">
        <div class="is-padded">
          <h2>Facebook</h2>
          <hr>
          <a href="#">#ที่ว่าการอำเภอห้างฉัตร</a>
          <p>https://www.facebook.com/pages/ที่ว่าการอำเภอห้างฉัตร/109064082511164</p>
          <em>3 days ago</em><br>
          <br>
          <a href="#">#ที่ว่าการอำเภอห้างฉัตร</a>
          <p>https://www.facebook.com/pages/ที่ว่าการอำเภอห้างฉัตร/109064082511164</p>
          <em>3 days ago</em> </div>
      </div>
      <div class="span4">
        <div class="is-padded">
           <h2>รายละเอียด</h2>
          <blockquote>แผนพัฒนาอำเภอ 4 ปี (พ.ศ.2561 - 2564) <br>อำเภอห้างฉัตร จ.ลำปาง<br>
            <br>
            <em>- คณะกรรมการบริหารงานอำเภอห้างฉัตร<br>
             ที่ทำการปกครองอำเภอห้างฉัตร<br>  
              โทร. 0 5426 9323</em> </blockquote>
        </div>
      </div>
    </div>
    <p> &copy;2016 Yoe Forever.<br>
      Design by <a href="http://www.yoe-lks.net">yoe-lks.net</a> </p>
  </footer>
</div>
<!-- /container -->
<script src="../themes/respond/assets/js/jquery-1.7.1.min.js"></script>
<script src="../themes/respond/assets/js/bootstrap-transition.js"></script>
<script src="../themes/respond/assets/js/bootstrap-carousel.js"></script>
<script src="../themes/respond/assets/js/bootstrap-alert.js"></script>
<script src="../themes/respond/assets/js/bootstrap-modal.js"></script>
<script src="../themes/respond/assets/js/bootstrap-dropdown.js"></script>
<script src="../themes/respond/assets/js/bootstrap-scrollspy.js"></script>
<script src="../themes/respond/assets/js/bootstrap-tab.js"></script>
<script src="../themes/respond/assets/js/bootstrap-tooltip.js"></script>
<script src="../themes/respond/assets/js/bootstrap-popover.js"></script>
<script src="../themes/respond/assets/js/bootstrap-button.js"></script>
<script src="../themes/respond/assets/js/bootstrap-collapse.js"></script>
<script src="../themes/respond/assets/js/bootstrap-typeahead.js"></script>
<script src="../themes/respond/assets/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="../themes/respond/assets/js/jquery.smooth-scroll.min.js"></script>
<script src="../themes/respond/assets/js/lightbox.js"></script>
<script>
$('.carousel').carousel({
  interval: 5000
})
</script>
<?php //$this->endBody() ?>
</body>
</html>
<?php //$this->endPage() ?>

