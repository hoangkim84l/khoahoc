<div class="page-in-name">
    <a href="<?php echo base_url()?>" >Trang chủ</a>
    <a href="<?php echo base_url()?>san-pham.html">Sản phẩm</a>
    <a href="javascript:void(0)"><?php echo $product->name?></a>

</div>
<div id="product-view-container">
    <div class="product-list-part custom-view-list-part">
        <div class="list-product-container">
            
            <div class="list-product-wrapper">
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
</div>    