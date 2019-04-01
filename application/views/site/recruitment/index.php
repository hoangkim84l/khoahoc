<!-- ********** Hero Area Start ********** -->
<div class="hero-area height-600 bg-img background-overlay" style="background-image: url(<?php echo public_url()?>/site/img/blog-img/bg4.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="single-blog-title text-center">
                    <h3><?php echo $info->name?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ********** Hero Area End ********** -->

<div class="main-content-wrapper section-padding-100">
<div class="container">
    <div class="row justify-content-center">
        <!-- ============= Post Content Area ============= -->
        <div class="col-12 col-lg-8">
            <div class="single-blog-content mb-100">               
                <!-- Post Content -->
                <div class="post-content">
                    <span><?php echo $info->info?></span>
                    <!-- Post Tags -->
                    <ul class="post-tags">
                        <li><a href="#"><?php echo $info->meta_key?></a></li>
                        <li><a href="#"><?php echo $info->meta_desc?></a></li>
                    </ul>
                    <!-- Post Meta -->
                    <div class="post-meta second-part">
                        <p><a href="#" class="post-author">Admin</a> on <a href="#" class="post-date"><?php echo mdate('%d-%m-%Y',$info->created)?> </a></p>
                    </div>
                </div>
            </div>
        </div>               
    </div>
</div>

<!--SLIDER-->
<div class="slider-inner" data-time="5000">
   <div class="title-page">
      <h1>Cơ hội nghề nghiệp</h1>
   </div>
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
         <div class="item-container">
            <div class="bg-inner" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/background/bg8.jpg)"></div>
         </div>
      </div>
   </div>
</div>
<!--SLIDER-->
<!--CONTENT-->
<section class="career">
   <!--SUB-MENU-->
   <div class="outer-nav">
      <div class="sub-nav">
         <ul>
            <li <b>Notice</b>: Undefined variable: key in <b>C:\Inetpub\vhosts\diaoctrananh.com\httpdocs\catalog\view\theme\default\template\cms\recruitment.tpl</b> on line <b>31</b>class="current" ><a href="javascript:void(0);" data-name="01">Môi trường làm việc</a></li>
            <li <b>Notice</b>: Undefined variable: key in <b>C:\Inetpub\vhosts\diaoctrananh.com\httpdocs\catalog\view\theme\default\template\cms\recruitment.tpl</b> on line <b>28</b>class="current" ><a href="javascript:void(0);" data-name="02">Tuyển dụng</a></li>
         </ul>
      </div>
   </div>
   <!--SUB-MENU-->
   <div class="career-list">
      <div class="career-box envairoment set-post" data-post="01">
         <div class="envairoment-bg" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/career/envairoment-bg.jpg)"></div>
         <div class="title">
            <h2>Môi trường làm việc</h2>
         </div>
         <div class="career-text ani-text">
            <p>Khi làm việc tại Trần Anh Group, bạn sẽ cảm nhận được một môi trường thân thiện, thoải mái và có cơ hội phát huy hết khả năng của mình trong công việc. Mọi thành viên luôn sẵn sàng hỗ trợ nhau trong công việc, góp phần đẩy nhanh hiệu quả công việc một cách tốt nhất.</p>
            <p>Với đội ngũ nhân viên chuyên nghiệp, công ty đã và đang xây dựng một môi trường làm việc chuyên nghiệp và học tập để mọi thành viên luôn vận động, tích cực trau dồi kiến thức, rèn luyện kĩ năng để có thể đảm nhiệm những công việc công ty giao phó. Vì vậy, cơ hội thăng tiến luôn luôn dành cho những ai không ngừng nỗ lực, phấn đấu cùng công ty.</p>
            <p>Ngoài ra, công ty thường xuyên có các hoạt động vui chơi lành mạnh, bổ ích, giúp cho toàn thể nhân viên được thư giãn sau những giờ làm việc căng thẳng.</p>
         </div>
      </div>
      <div class="career-box recruitment set-post" data-post="02">
         <div class="news-box ani-text">
            <div class="title">
               <h2>Tin tuyển dụng</h2>
            </div>
            <div class="scroll-slide">
               <div class="news-link center-no-paging">
                  <div class="link-page ">
                     <a href="http://www.diaoctrananh.com/vi/co-hoi-nghe-nghiep/tuyen-chuyen-vien-phong-ho-so.html" data-details="recruitment-4" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group"></a>
                     <div class="link-text">
                        <h3>TUYỂN CHUYÊN VIÊN PHÒNG HỒ SƠ</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--load-->
         <div class="news-bg ani-text">
            <div class="news-load"></div>
         </div>
         <!--/load-->
      </div>
   </div>
</section>
<!--CONTENT-->