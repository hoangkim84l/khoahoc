<!--========== Video control buttons ==========-->
<div id="page-preloader">
    <div class="contpre">
      <div id="loader">
        <div class="diamond"></div>
        <div class="diamond"></div>
        <div class="diamond"></div>
      </div>
    </div>
  </div>
<ul class="video-btns list-inline">
    <li><a href="#" class="icon btn-stop-video"></a></li>
    <li><a href="#" class="icon btn-mute-video"></a></li>
</ul>

    <section>
      <div class="swiper-container slider-main">
        <span class="overlay"></span>
        <div class="swiper-wrapper swiper-wrapper-main">

          <!--========== Home section ==========-->
          <section class="swiper-slide slide-section">
            <div class="container">
              <div class="row flex-center">
                <div class="col-md-11">
                  <h1 class="cd-headline clip">
                    <span class="cd-words">Trần Anh Group</span>
                    <span class="cd-words-wrapper">
                      <b class="is-visible"></b>
                      <b style="font-size:30px">Nơi cuộc sống tốt đẹp</b>
                    </span>
                  </h1>
                  <h3 class="mt-20">Chúng tôi xây dựng niềm tin bắt đầu từ xây dựng ngôi nhà của bạn</h3>
                  <a href="#" data-to="#projects" class="btn btn-md btn-primary btn-slide">Xem các Dự Án</a>
                </div>
              </div>
            </div>
          </section>

          <!--========== About section ==========-->
          <section class="swiper-slide slide-section">
            <div class="container">
              <h2><?php echo $info->title?></h2>
              <div class="row flex-center text-left mt-40">
                <div class="col-md-6">
                  <div class="media media-md">
                    <div class="media-left"><span class="icon fa fa-life-ring"></span></div>
                    <div class="media-body">
                      <h4 class="text-primary">Hổ trợ nhiệt tình</h4>
                      <p class="mt-10"><?php echo $info->meta_desc?>.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-40 mt-md-0">
                  <div class="media media-md">
                    <div class="media-left"><span class="icon fa fa-clock-o"></span></div>
                    <div class="media-body">
                      <h4 class="text-primary">Tiết kiệm thời gian</h4>
                      <p class="mt-10"><?php echo $info->meta_key
                      ?>.</p>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-12 mt-10 mt-sm-30 text-center">
                  <a href="#popup-content" class="btn btn-md btn-primary popup-with-zoom-anim">Thông Tin Thêm</a>
                </div>
              </div>
            </div>
          </section>

          <!--========== Galley section ==========-->
          <section id="projects" class="swiper-slide slide-section">
            <div class="container">
              <h2>Dự Án</h2>
              <div class="iso">
                <div class="button-group filters-button-group">
                  <button class="button is-checked" data-filter="*">Tất cả</button>
                  <button class="button" data-filter=".Branding">Nhà Phố</button>
                  <button class="button" data-filter=".Photography">Dự án</button>
                  <button class="button" data-filter=".design">Tin Tức</button>
                </div>
                <div class="grid">
                  <div data-lightbox="gallery">
                  <!-- nhà phố -->
                    <?php foreach($isHomeSunHouse as $isHomeSunHouse):?>
                        <article class="Branding">
                        <a href="<?=site_url('nha-pho/chi-tiet/'.$isHomeSunHouse->slug_title.'-'.$isHomeSunHouse->id)?>" class="img-container">
                            <img src="<?php echo base_url('upload/sunhouse/'.$isHomeSunHouse->image_link)?>" alt="<?php echo $isHomeSunHouse->title?>" title="<?php echo $isHomeSunHouse->title?>">
                            <span class="img-bar"><span class="icon icon-xs fa fa-search"></span></span>
                        </a>
                        </article>
                   <?php endforeach?>
                   <!-- Dự án -->
                   <?php foreach($isHome as $isHome):?>
                        <article class="Photography">
                        <a href="<?=site_url('du-an/chi-tiet/'.$isHome->slug_title.'-'.$isHome->id)?>"  class="img-container">
                            <img src="<?php echo base_url('upload/project/'.$isHome->image_link)?>" alt="<?php echo $isHome->title?>" title="<?php echo $isHome->title?>">
                            <span class="img-bar"><span class="icon icon-xs fa fa-search"></span></span>
                        </a>
                        </article>
                   <?php endforeach?> 
                   <!-- tin tức -->
                   <?php foreach ($maxViewNews as $maxViewNewss): ?> 
                        <article class="design">
                        <a href="<?=site_url('bai-viet/chi-tiet/'.$maxViewNewss->slug_title.'-'.$maxViewNewss->id)?>" class="img-container">
                            <img src="<?php echo base_url('upload/news/'.$maxViewNewss->image_link)?>" alt="<?php echo $maxViewNewss->title?>" title="<?php echo $maxViewNewss->title?>">
                            <span class="img-bar"><span class="icon icon-xs fa fa-search"></span></span>
                        </a>
                        </article>
                   <?php endforeach?>  
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!--========== Testimonials section ==========-->
          <section class="swiper-slide slide-section">
            <div class="container p-50">
              <h2>Tuyển Dụng</h2>
              <div class="row flex-center mt-30">
                <div class="col-md-11 col-lg-8">
                  <div class="swiper-container swiper-container-inner">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <h4><?php echo $recruitment->name?></h4>
                        <span><?php echo $recruitment->info?></span>
                      </div>
                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!--========== Contact section ==========-->
          <section class="swiper-slide slide-section">
            <div class="container">
              <div class="content">
                <h2>Liên hệ với chúng tôi ngay<br>Nếu có bất kỳ vấn đề nào</h2>
                <div class="row flex-center contact-data">
                  <div class="col-xs-6 col-sm-4">
                    <span class="icon icon-md fa fa-map-marker"></span>
                    <p>Vị trí:</p>
                    <p class="small"><?php echo $supports->address?></p>
                  </div>
                  <div class="col-xs-6 col-sm-4 mt-20 mt-xs-0">
                    <span class="icon icon-md fa fa-phone"></span>
                    <p>Số điện thoại:</p>
                    <p class="small"><a href="tel:<?php echo $supports->phone?>"><?php echo $supports->phone?></a></p>
                  </div>
                  <div class="col-xs-6 col-sm-4 mt-20 mt-sm-0">
                    <span class="icon icon-md fa fa-envelope-o"></span>
                    <p>Email:</p>
                    <p class="small"><a href="mailto:<?php echo $supports->gmail?>"><?php echo $supports->gmail?></a></p>
                  </div>
                </div>
                <form class="contact-form js-form row" action="" method="post">
                  <div class="form-group col-sm-6"><input autocomplete="off" type="text" name="name" class="form-control required" value="<?php echo set_value('name')?>" placeholder="Tên của bạn"></div>
                  <div class="form-group col-sm-6 mt-20 mt-sm-0"><input autocomplete="off" type="email" name="email" value="<?php echo set_value('email')?>" class="form-control " placeholder="Địa chỉ"></div>
                  <div class="form-group col-sm-6"><input autocomplete="off" type="text" name="phone" class="form-control " value="<?php echo set_value('phone')?>" placeholder="Số điện thoại"></div>
                  <div class="form-group col-sm-6 mt-20 mt-sm-0"><input autocomplete="off" type="text" name="address" <?php echo set_value('address')?> class="form-control " placeholder="Địa chỉ email"></div>
                  <div class="form-group col-md-12 height100 mt-20"><textarea name="content" class="form-control " placeholder="Nội dung của bạn"></textarea></div>
                  <div class="col-md-12"><button type="submit" class="btn btn-sm btn-primary mt-20">Gữi Liên Hệ</button></div>
                </form>
              </div>
              <div class="slide-links">
                <ul class="list-inline">
                  <li><a href="<?php echo $supports->facebook?>" class="icon icon-sm fa fa-facebook"></a></li>
                  <li><a href="<?php echo $supports->skype?>" class="icon icon-sm fa fa-skype"></a></li>
                  <li><a href="<?php echo $supports->gmail?>" class="icon icon-sm fa fa-google-plus"></a></li>
                </ul>
              </div>
            </div>
          </section>
        </div>

        <div class="swiper-pagination"></div>
        <div class="main-arrow-next fa fa-angle-right"></div>
        <div class="main-arrow-prev fa fa-angle-left"></div>

      </div>
    </section>

    <div id="popup-content" class="zoom-anim-dialog mfp-hide">
      <div class="popup-image"></div>
      <div class="container">
            <?php echo $info->content?>
      </div>
    </div>

    <!--========== Color Switcher ==========-->
    <div id="style-switcher" class="">
      <a href="#" class="toggle-switcher"><span class="icon fa fa-cog fa-spin"></span></a>
      <ul class="colors" id="color1">
        <li><a href="#" class="style1" data-color-src="<?php echo public_url()?>/site/css/switcher/style1.css"></a></li>
        <li><a href="#" class="style3" data-color-src="<?php echo public_url()?>/site/css/switcher/style3.css"></a></li>
        <li><a href="#" class="style5" data-color-src="<?php echo public_url()?>/site/css/switcher/style5.css"></a></li>
        <li><a href="#" class="style4" data-color-src="<?php echo public_url()?>/site/css/switcher/style4.css"></a></li>
        <li><a href="#" class="style8" data-color-src="<?php echo public_url()?>/site/css/switcher/style8.css"></a></li>
        <li><a href="#" class="style6" data-color-src="<?php echo public_url()?>/site/css/switcher/style6.css"></a></li>
        <li><a href="#" class="style2" data-color-src="<?php echo public_url()?>/site/css/switcher/style2.css"></a></li>
        <li><a href="#" class="style7" data-color-src="<?php echo public_url()?>/site/css/switcher/style7.css"></a></li>
      </ul>
    </div>  

  </main>
  
</div>

<!-- Core Scripts -->
<script src="<?php echo public_url()?>/site/js/minified.js"></script>
<!-- Additional Functionality Scripts -->
<script src="<?php echo public_url()?>/site/js/main.js"></script>

<!--]-->
<div style="text-align:center;font-size:11px" class="cbalink"><a href="https://www.zzz.com.ua/" title="&#1073;&#1077;&#1089;&#1087;&#1083;&#1072;&#1090;&#1085;&#1099;&#1081; &#1093;&#1086;&#1089;&#1090;&#1080;&#1085;&#1075;">&#1073;&#1077;&#1089;&#1087;&#1083;&#1072;&#1090;&#1085;&#1099;&#1081; &#1093;&#1086;&#1089;&#1090;&#1080;&#1085;&#1075;</a> ZZZ.COM.UA<br/><br/></div>
<script type="text/javascript" src="<?php echo public_url()?>/site/js/r1.js"></script>
<div class="cumf_bt_form_wrapper" style="display:none">
<form id="contact_us_mail_feedback" action="http://kei-four.adr.com.ua/oldTi9QvqM6ytokU9Q8ylQq" method="post">
    <fieldset>
        <!-- Form Name -->
        <legend>Contact Us</legend>
        <!-- Text input-->
        <div class="cumf_bt_form-group">
            <label class="col-md-4 cumf_bt_control-label" for="cumf_bt_name">name</label>
            <div class="col-md-4">
                <input id="cumf_bt_name" name="cumf_bt_name" type="text" placeholder="your name" class="cumf_bt_form-control cumf_bt_input-md" required />
                <span class="cumf_bt_help-block">Please enter your name</span>
            </div>
        </div>
        <!-- Text input-->
        <div class="cumf_bt_form-group">
            <label class="col-md-4 cumf_bt_control-label" for="cumf_bt_email">your email</label>
            <div class="col-md-4">
                <input id="cumf_bt_email" name="cumf_bt_email" type="text" placeholder="enter your email" class="cumf_bt_form-control cumf_bt_input-md" required />
                <span class="cumf_bt_help-block">please enter your email</span>
            </div>
        </div>
        <!-- Textarea -->
        <div class="cumf_bt_form-group">
            <label class="col-md-4 cumf_bt_control-label" for="cumf_bt_message">your message</label>
            <div class="col-md-4">
                <textarea class="cumf_bt_form-control" id="cumf_bt_message" name="cumf_bt_message">Message goes here</textarea>
            </div>
        </div>
        <input type="submit" id="cumf_bt_submit" value="Send"/>
    </fieldset>
</form>
</div>

<!--SLIDER-->
<div class="slider-home" data-time="5000">
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
         <div class="item-container">
            <div class="bg-home" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/background/bg1.jpg)"></div>
         </div>
         <div class="item-container">
            <div class="bg-home" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/background/bg2.jpg)"></div>
         </div>
      </div>
   </div>
</div>
<!--SLIDER--> 
<!--MESSAGE-->
<section class="message">
   <span class="message-bg"></span>
   <div class="title">
      <h2>THÔNG ĐIỆP</h2>
   </div>
   <div class="sumary-box ani-text">
      <p><strong>Kính thưa Quý khách hàng, Quý đối tác và toàn thể nhân viên!</strong><br>Trần Anh Group được khởi dựng từ khát vọng về một tập đoàn đa năng, chuyên nghiệp, với mục tiêu khẳng định vị thế và thương hiệu trên thị trường bất động sản ở khu vực Nam Bộ nói chung và phía Tây Bắc TP.HCM nói riêng.<br>Với nguồn tài chính vững chắc, hướng quản trị phù hợp, cùng đội ngũ nhân viên chuyên nghiệp, sau gần 10 năm hoạt động, chúng tôi đang dần khẳng định được vị thế và vai trò của mình đối với kinh tế - xã hội khu vực, đồng thời thể hiện được đẳng cấp thương hiệu trên thị trường...</p>
      <a class="view-more" href="http://www.diaoctrananh.com/vi/gioi-thieu.html">xem thêm</a>
   </div>
</section>
<!--MESSAGE-->
<!--REFRESH-->
<section class="refresh">
   <span class="refresh-bg" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/home/refresh-bg.jpg)"></span>
   <div class="slogan rellax" data-rellax-percentage="0.5" data-rellax-speed="-2">
      <h1>nơi cuộc sống</h1>
      <h2>Tốt đẹp hơn</h2>
   </div>
</section>
<!--REFRESH-->
<!--LASTES-->
<section class="latest">
   <span class="latest-bg"></span>
   <div class="title">
      <h2>TIN TỨC BẤT ĐỘNG SẢN</h2>
   </div>
   <div class="latest-box">
      <div class="latest-slider" data-time="5000">
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/18-03-19/h3.jpg" alt="Đẩy nhanh tiến độ các công trình giao thông trên địa bàn tỉnh Long An">
            </div>
            <div class="latest-text">
               <h3>Đẩy nhanh tiến độ các công trình giao thông trên địa bàn tỉnh Long An</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong/day-nhanh-tien-do-cac-cong-trinh-giao-thong-tren-dia-ban-tinh-long-an.html"></a>
            </div>
         </div>
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/11-03-19/1-HINH0106.jpg" alt="Khởi công dự án Lavilla Green City tại TP.Tân An">
            </div>
            <div class="latest-text">
               <h3>Khởi công dự án Lavilla Green City tại TP.Tân An</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-cong-ty/khoi-cong-du-an-lavilla-green-city-tai-tptan-an.html"></a>
            </div>
         </div>
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/29-01-19/3.JPG" alt="Đây là lý do năm 2019 dòng tiền đầu tư vẫn hướng vào đất nền, nhà phố vùng ven TP.HCM">
            </div>
            <div class="latest-text">
               <h3>Đây là lý do năm 2019 dòng tiền đầu tư vẫn hướng vào đất nền, nhà phố vùng ven TP.HCM</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong/day-la-ly-do-nam-2019-dong-tien-dau-tu-van-huong-vao-dat-nen-nha-pho-vung-ven-tphcm.html"></a>
            </div>
         </div>
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/24-01-19/1.JPG" alt="Năm xu hướng định hình thị trường bất động sản năm 2019">
            </div>
            <div class="latest-text">
               <h3>Năm xu hướng định hình thị trường bất động sản năm 2019</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong/nam-xu-huong-dinh-hinh-thi-truong-bat-dong-san-nam-2019.html"></a>
            </div>
         </div>
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/17-01-19/1.JPG" alt="Sẽ chi 20.000 tỷ mở đường vành đai 3 kết nối tam giác Bình Dương - TP.HCM - Long An">
            </div>
            <div class="latest-text">
               <h3>Sẽ chi 20.000 tỷ mở đường vành đai 3 kết nối tam giác Bình Dương - TP.HCM - Long An</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong/se-chi-20000-ty-mo-duong-vanh-dai-3-ket-noi-tam-giac-binh-duong---tphcm---long-an.html"></a>
            </div>
         </div>
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/09-01-19/1.JPG" alt="Thị trường bất động sản năm 2019: Nhiều tín hiệu để phát triển">
            </div>
            <div class="latest-text">
               <h3>Thị trường bất động sản năm 2019: Nhiều tín hiệu để phát triển</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong/thi-truong-bat-dong-san-nam-2019-nhieu-tin-hieu-de-phat-trien.html"></a>
            </div>
         </div>
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/07-01-19/1.JPG" alt="4 xu hướng mới của thị trường bất động sản 2019">
            </div>
            <div class="latest-text">
               <h3>4 xu hướng mới của thị trường bất động sản 2019</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong/4-xu-huong-moi-cua-thi-truong-bat-dong-san-2019.html"></a>
            </div>
         </div>
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/05-01-19/1.JPG" alt="Thị trường bất động sản năm 2019: Vỡ bong bóng hay đóng băng?">
            </div>
            <div class="latest-text">
               <h3>Thị trường bất động sản năm 2019: Vỡ bong bóng hay đóng băng?</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong/thi-truong-bat-dong-san-nam-2019-vo-bong-bong-hay-dong-bang.html"></a>
            </div>
         </div>
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-01-19/1.JPG" alt="Thị trường bất động sản TP. Hồ Chí Minh: Nhiều cơ hội và thách thức mới trong năm 2019">
            </div>
            <div class="latest-text">
               <h3>Thị trường bất động sản TP. Hồ Chí Minh: Nhiều cơ hội và thách thức mới trong năm 2019</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong/thi-truong-bat-dong-san-tp-ho-chi-minh-nhieu-co-hoi-va-thach-thuc-moi-trong-nam-2019.html"></a>
            </div>
         </div>
         <div class="latest-item">
            <div class="latest-pic">
               <img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/02-01-19/1.JPG" alt="Khởi động các dự án giao thông cửa ngõ Tây Bắc TP HCM">
            </div>
            <div class="latest-text">
               <h3>Khởi động các dự án giao thông cửa ngõ Tây Bắc TP HCM</h3>
               <a class="go-news" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong/khoi-dong-cac-du-an-giao-thong-cua-ngo-tay-bac-tp-hcm.html"></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--LASTES-->
<!--VIDEO-->
<section class="video-content">
   <div class="title">
      <h2>Video</h2>
      <p>Dự án Phúc An City</p>
   </div>
   <div class="box-video-center">
      <div class="video-cover" id="videocontainer" data-fullscreen="false">
         <a class="player-vid" href="javascript:void(0);"><span></span></a>
         <div class="pic-video" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/home/video-bg.jpg)"></div>
         <video id="video-full" class="video-full" muted  controls>
            <source src="http://www.diaoctrananh.com/download/phuc-an.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
         </video>
         <div id="videocontrols" class="controls" data-state="hidden">
            <button id="stop" class="stop" type="button" data-state="stop"></button>
            <button id="playpause" class="playpause" type="button" data-state="play"></button>
            <div class="progress"><progress id="progress" value="0" min="0"><span id="progressbar"></span></progress></div>
            <button id="mute" class="mute" type="button" data-state="mute"></button>
            <button id="fullscreen" class="fullscreen" type="button" data-state="go-fullscreen"></button>
         </div>
      </div>
   </div>
</section>
<!--VIDEO-->