
<div id="c6282" class="csc-default">  
  <?php $this->load->view('site/slide')?> 
</div>
  
<div class="top-product-container" >

  <?php foreach($maxView as $row):?>
    <div class="product-wrapper">
      <a href="<?=site_url('san-pham/chi-tiet/'.$row->slug_name.'-'.$row->id)?>" class="internal-link">
        <div class="product">
            <div class="product-img" 
                data-preload-image-url="<?php echo base_url('upload/product/'.$row->image_link)?>"></div>
            <div class="product-des">
              <p class="title"><?=$row->name?></p>
            </div>
        </div>
      </a>     
    </div>
  <?php endforeach;?>

</div>

