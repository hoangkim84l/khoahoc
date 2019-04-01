
<!--SLIDER-->
<div class="slider-inner" data-time="3000">
   <div class="title-page">
      <h1>Tin tức</h1>
   </div>
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
         <div class="item-container">
            <div class="bg-inner" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/background/bg10.jpg)"></div>
         </div>
      </div>
   </div>
</div>
<!--SLIDER-->
<!--CONTENT-->
<section class="news-content">
   <!--SUB-MENU-->
   <div class="outer-nav">
      <div class="sub-nav">
         <ul>
           <!--  <li class="current" ><a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an.html">Tin dự án</a></li>
            <li  ><a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong.html">Tin thị trường</a></li>
            <li  ><a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-cong-ty.html">Tin công ty</a></li> -->
         </ul>
      </div>
   </div>
   <!--SUB-MENU-->
   <!--load-->
   <div class="news-bg show">
<div class="news-load" style="opacity: 1;"><div class="detail-news">
<h3><?php echo $info->title;?></h3>
<div class="news-content-text">
  <?php echo $info->content?> 
</div>

   <!--/load-->
   <div class="news-relation">
      <div class="news-box ani-text">
         <div class="title">
            <h2>Tin liên quan</h2>
         </div>
         <div class="scroll-slide">
            <div class="news-link center-no-paging">
              <?php foreach($maxView as $view):?>
               <div class="link-page ">
                  <a href="<?=site_url('bai-viet/chi-tiet/'.$view->slug_title.'-'.$view->id)?>" data-details="news-223" data-title="Bất động sản Tây Bắc TP.HCM vẫn là tâm điểm thu hút đầu tư" data-description="<?php echo $view->meta_desc;?>." data-keyword="<?php echo $view->meta_key;?>"></a>
                  <div class="pic-thumb"><img src="<?php echo base_url('upload/news/'.$view->image_link)?>" alt="<?php echo $view->meta_desc;?>"></div>
                  <div class="link-text">
                     <h3><?php echo $view->title;?></h3>
                  </div>
                  <span class="news-icon"></span>
               </div>
               <?php endforeach;?>
            </div>
         </div>
      </div>
   </div>
</section>
<!--CONTENT-->