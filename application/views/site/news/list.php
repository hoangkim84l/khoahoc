<!--SLIDER-->
<div class="slider-inner" data-time="3000">
   <div class="title-page">
      <h1>Tin tức</h1>
   </div>
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
         <div class="item-container">
            <div class="bg-inner" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/background/bg9.jpg)"></div>
         </div>
      </div>
   </div>
</div>
<!--SLIDER-->
<!--CONTENT-->
<section class="news-content">
   <!--SUB-NAV-->
   <div class="outer-nav">
      <div class="sub-nav">
         <ul>
            <li class="current" ><a class="link-load" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an.html">Tin dự án</a></li>
            <li  ><a class="link-load" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong.html">Tin thị trường</a></li>
            <li  ><a class="link-load" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-cong-ty.html">Tin công ty</a></li>
         </ul>
      </div>
   </div>
   <!--SUB-NAV-->
   <div class="title">
      <h2>Tin dự án</h2>
   </div>
   <div class="news-list">
      <div class="grid">
        <?php if(empty($list)):?>
               <h2 style='text-align:center'>Chưa có bài viết nào</h2>
        <?php else:?>
        <?php foreach ($list as $row): ?>
          <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="<?php echo base_url('upload/news/'.$row->image_link)?>" alt="<?php echo $row->meta_key; ?>"></div>
               <div class="news-text">
                  <h3><?php echo $row->title; ?></h3>
                  <p><?php echo $row->intro; ?>.</p>
               </div>
               <span class="news-icon"></span><a class="direct-link" href="<?=site_url('bai-viet/chi-tiet/'.$row->slug_title.'-'.$row->id)?>"></a>
            </div>
          </div>
        <?php endforeach; ?>
        <?php endif;?> 
      </div>
   </div>
   <div class="page-load-status">
      <div class="loader-ellips infinite-scroll-request">
         <span class="loader-ellips-dot"></span>
         <span class="loader-ellips-dot"></span>
         <span class="loader-ellips-dot"></span>
         <span class="loader-ellips-dot"></span>
      </div>
      <p class="infinite-scroll-error"></p>
   </div>
   <div class="more-box">
      <div class='pagination_news'>
          <?php echo $this->pagination->create_links();?>
        </div>
   </div>
</section>
<!--CONTENT-->