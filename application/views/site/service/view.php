<div class="page-in-name">
    <a href="<?php echo base_url()?>" ><span>Trang chủ<span></a>
    <a href="<?php echo base_url()?>dich-vu.html"><span>Dịch vụ<span></a>
    <a ><span><?php echo $info->title?></span></a>
</div>

<div id="product-view-container">
    <div class="single-product-container">
        <div class="single-product-wrapper">
            <div class="img-container img-container-view" data-preload-image-url="<?php echo base_url('upload/service/'.$info->image_link)?>">
            </div>
            <div class="info product-info">
                <h1 class="product-title"><?php echo $info->title?></h1>
                <p class="product-content">
                    <?php echo $info->content?>
                </p>
            </div>    
        </div>  
        <!-- <div class="product-content">
            
        </div>   -->
    </div>
</div>    