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