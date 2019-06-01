<div class="container-service">
   <div class="row-header-service"><div class="page-in-bread"><span><h3>Dịch vụ</h3></span> </div>
</div>
<div class="container-service">    
  <div class="row">
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
      <hr>
      <p>Địa chỉ chi nhánh</p>
      <?php foreach($address_list as $row):?>
        <ul class="contact-footer" style="text-align: left;list-style: none;">
           <li><i class="icon-location"></i> Địa chỉ : <?php echo $row->address?></li>
           <li><i class="icon-mobile"></i><a href="tel:<?php echo $row->phone?>"><?php if($row->phone != ''){ echo " Điện thoại : ".$row->phone;}?></a></li>
           <li><i class="icon-inbox"></i><a href="tel:<?php echo $row->hotline?>?>"><?php if($row->hotline != ""){ echo " Hotline : ". $row->hotline;}?></a></li>
         </ul> 
      
      <?php endforeach ?>  
      </div><br/>
    </div>
  </div>
</div>
