<div class="page-in-name">
    <a href="<?php echo base_url()?>" ><span>Trang chủ<span></a>
    <a href="<?php echo base_url()?>san-pham.html"><span>Sản phẩm<span></a>
    <a ><span><?php echo $product->name?></span></a>
</div>

<div id="product-view-container">
    <div class="single-product-container">
        <div class="single-product-wrapper">
            <div class="img-container img-container-view" data-preload-image-url="<?php echo base_url('upload/product/'.$product->image_link)?>">
            </div>
            <div class="info product-info">
                <h1 class="product-title"><?php echo $product->name?></h1>
                <p class="product-content">
                    <?php echo $product->content?>
                </p>
            </div>    
        </div>  
        <!-- <div class="product-content">
            
        </div>   -->
    </div>
</div>    