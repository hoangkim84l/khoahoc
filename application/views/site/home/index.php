<!--SLIDER-->
<div class="slider-home" data-time="5000">
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
        <?php foreach($slide_list as $row):?>  
         <div class="item-container">
            <div class="bg-home" style="background-image:url(<?php echo base_url('upload/slide/'.$row->image_link)?>)"></div>
         </div>
        <?php endforeach;?>
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
      <a class="view-more" href="thong-tin-ve-chung-toi.html">xem thêm</a>
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
        <?php if(empty($isHomeNews)):?>
               <h2 style='text-align:center'>Chưa có bài viết nào</h2>
        <?php else:?>
        <?php foreach($isHomeNews as $rowNews):?> 
         <div class="latest-item">
            <div class="latest-pic">
               <img src="<?php echo base_url('upload/news/'.$rowNews->image_link)?>" alt="<?php echo $rowNews->meta_key; ?>">
            </div>
            <div class="latest-text">
               <h3><?php echo $rowNews->title; ?></h3>
               <a class="go-news" href="<?=site_url('bai-viet/chi-tiet/'.$rowNews->slug_title.'-'.$rowNews->id)?>"></a>
            </div>
         </div>
        <?php endforeach;?> 
        <?php endif;?>
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
<div class="loadicon">
  <svg  class="load-present" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200">
  <path class="stroke-line"  d="M97.5,1.3 11.9,50.7 11.9,149.6 97.5,199 97.5,169.9 37.1,135 37.1,65.2 72.4,44.8 72.4,121 97.5,135.5z"></path>
  <path class="stroke-line"  d="M102.4,1.3 102.4,135.5 127.6,121 127.6,44.8 162.9,65.2 162.9,135 102.4,169.9 102.4,199 188.1,149.6 188.1,50.7z"></path>
  </svg>
</div>