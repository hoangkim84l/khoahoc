<br/>
<div class="container marg75">
  <div class="row">
    <div class="col-lg-12">
      <div class="promo-block">
        <div class="promo-text">Tìm chúng tôi ở đâu ?</div>
        <div class="center-line"></div>
      </div>
    </div>
  </div>
</div>
<br/>

<div class="container marg100">
 <div class="row">
  <div class="col-lg-12">
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <?php 
   $address = str_replace(" ", "+",$supports->address);
  ?>
  <iframe width="100%" height="500" frameborder="0" id="cusmap" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $address; ?>&output=embed"></iframe>  
   </div> 
</div>
</div>  
<div class="container marg100">
 <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
   <div class="promo-block">
    <div class="promo-text">Mẩu liên hệ</div>
    <div class="center-line"></div>
  </div>
  <div class="marg50">
    <div class="row">
     <form id="contactForm" action="" method="post" class="form-style" name="sentMessage"  novalidate="">
      <div class="col-lg-4">
       <div class="text_cont form-group floating-label-form-group controls">
        <input id="name" type="text" name="name" placeholder="Tên của bạn" required="" data-validation-required-message="Tên của bạn" class="form-control"><span class="help-block text-danger"></span>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="text_cont form-group floating-label-form-group controls">
       <input id="email" name="email" type="email" placeholder="Email của bạn" required="" data-validation-required-message="Email của bạn" class="form-control"><span class="help-block text-danger"></span>
     </div>
   </div>
   <div class="col-lg-4">
     <div class="text_cont form-group floating-label-form-group controls">
      <input id="phone" name="phone" type="tel" placeholder="Nhập số điện thoại" required="" data-validation-required-message="Nhập số điện thoại" class="form-control"><span class="help-block text-danger"></span>
    </div>
  </div>
  <div class="col-lg-12">
     <div class="text_cont form-group floating-label-form-group controls">
      <input id="address" name="address" type="text" placeholder="Địa chỉ của bạn"  data-validation-required-message="Địa chỉ của bạn" class="form-control"><span class="help-block text-danger"></span>
    </div>
  </div>
  <div class="col-lg-12">
   <div class="text_cont form-group floating-label-form-group controls">
    <textarea id="content" name="content" cols="40" rows="10" placeholder="Nội dung tin nhắn." required="" data-validation-required-message="Nội dung tin nhắn." aria-invalid="false" class="form-control"></textarea><span class="help-block text-danger"></span>
  </div>
</div>
<div class="col-lg-12"><div id="success"></div></div>
<div class="col-lg-12"><p><button type="submit" class="btn btn-default">Gửi liên hệ</button></p></div>
</form>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4">
 <div class="promo-block">
  <div class="promo-text">Thông tin liên hệ</div>
  <div class="center-line"></div>
</div>
<div class="marg50">
  <ul class="contact-footer">
   <li><i class="icon-location"></i> Địa chỉ : <?php echo $supports->address?></li>
   <li><i class="icon-mobile"></i> Điện thoại : <a href="tel:<?php echo $supports->phone?>"><?php echo $supports->phone?></a></li>
   <li><i class="icon-inbox"></i> Hotline : <a href="tel:<?php echo $supports->hotline?>?>"><?php echo $supports->hotline?></a></li>
   <li><i class="icon-videocam"></i> Zalo : <?php echo $supports->zalo?></li>
   <li><i class="icon-mail"></i> E-mail: <a href="mailto:<?php echo $supports->gmail?>"><?php echo $supports->gmail?></a></li>
 </ul> 
 <ul class="soc-contacts">
   <li><a href="<?php echo $supports->facebook?>"><i class="fa fa-facebook-square"></i></a></li>
   <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
   <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
   <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
 </ul> 
</div>
</div>
</div>
</div>