
<div id="product-container">
  <div class="product-category-part">
    <ul id="menuTree">
            <li><strong class="collapsible">Sản phẩm</strong>
                <ul class="content">
                    <li><a href="<?=site_url('san-pham-moi-nhat.html')?>" onfocus="blurLink(this);">Sản phẩm mới</a></li>
                    <li><a href="<?=site_url('san-pham-xem-nhieu-nhat.html')?>" onfocus="blurLink(this);">Sản phẩm xem nhiều nhất</a></li>
                </ul><span></span></li>
            <li><strong class="collapsible">Danh mục sản phẩm</strong>
              <ul class="content">
                <?php foreach ($catalog_list as $row):?>
                   <li>
                     <a href="<?php echo base_url('san-pham/danh-muc/'.$row->id)?>"  onfocus="blurLink(this);" title="<?php echo $row->name?>"><?php echo $row->name?></a>
                     <?php if(!empty($row->subs)):?>
                     <!-- lay danh sach danh muc con -->
                     <ul class="catalog-sub">  
                            <?php foreach ($row->subs as $sub):?>                                           
                            <li>
                                <a href="<?php echo base_url('san-pham/danh-muc/'.$sub->id)?>"  onfocus="blurLink(this);" title="<?php echo $sub->name?>"> 
                                <?php echo $sub->name?></a>
                            </li>
                            <?php endforeach;?>                                     
                     </ul>
                     <?php endif;?>
                  </li>
                <?php endforeach;?>  
              </ul>
            </li>
        </ul>    
  </div>
  <div class="product-list-part">
    <div class="list-product-container">
      <?php foreach($list as $row):?>
        <div class="list-product-wrapper">
          <div class="img-container" data-preload-image-url="<?php echo base_url('upload/product/'.$row->image_link)?>"></div>
          <div class="info">
            <h4 class="title"><?php echo $row->name?></h4>
            <p class="content">
              <?php echo $row->content?>
            </p>
            <a class="detail-link" href="<?=site_url('san-pham/chi-tiet/'.$row->slug_name.'-'.$row->id)?>" title="<?php echo $row->name?>" >Xem thêm</a></p>
            
          </div>  
        </div>
      <?php endforeach;?>     
    </div>
  </div>
  <div class="contact-part">
    <ul class="contact" style="text-align: left;list-style: none;">
      <li><i class="icon-mobile"></i> Điện thoại : <a href="tel:<?php echo $supports->phone?>"><?php echo $supports->phone?></a></li>
      <li><i class="icon-inbox"></i> Hotline : <a href="tel:<?php echo $supports->hotline?>?>"><?php echo $supports->hotline?></a></li>
      <li><i class="icon-videocam"></i> Zalo : <?php echo $supports->zalo?></li>
      <li><i class="icon-mail"></i> E-mail: <a href="mailto:<?php echo $supports->gmail?>"><?php echo $supports->gmail?></a></li>
    </ul>
  </div>
</div>

