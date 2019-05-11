<div class="container-contact">
 <div class="container">
  <div class="row">
   <div class=""><div class="page-in-bread"><span><h3>Dịch vụ</h3></span> </div>
   </div>
   
 </div>
</div>
<div class="container-contact">    
  <div class="row content">
   
    <div class="col-lg-8 col-sm-12 col-md-8 text-left"> 
      <?php foreach($list as $service):?>
        <h4><a href="<?=site_url('dich-vu/chi-tiet/'.$service->slug_title.'-'.$service->id)?>"><?php echo $service->title?></a></h4>
        <p><?php echo $service->intro?>.</p>
      <hr>
      <?php endforeach;?>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-4  sidenav">
      <div class="well">
        <p>Thông tin liên hệ</p><br/>
        <ul class="contact-footer" style="text-align: left;list-style: none;">
           <li><i class="icon-location"></i> Địa chỉ : <?php echo $supports->address?></li>
           <li><i class="icon-mobile"></i> Điện thoại : <a href="tel:<?php echo $supports->phone?>"><?php echo $supports->phone?></a></li>
           <li><i class="icon-inbox"></i> Hotline : <a href="tel:<?php echo $supports->hotline?>?>"><?php echo $supports->hotline?></a></li>
           <li><i class="icon-videocam"></i> Zalo : <?php echo $supports->zalo?></li>
           <li><i class="icon-mail"></i> E-mail: <a href="mailto:<?php echo $supports->gmail?>"><?php echo $supports->gmail?></a></li>
         </ul> 
      </div>
      
    </div>
  </div>
</div>
