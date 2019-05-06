<div class="product-list-part">
    <div class="list-product-container">
        <div class="list-product-wrapper">
            <div class="img-container" data-preload-image-url="<?php echo base_url('upload/product/'.$product->image_link)?>">
            </div>
            <div class="info">
                <h4 class="title"><?php echo $product->name?></h4>
                <p class="content">
                    <?php echo $product->gifts?>
                </p>
            </div>    
        </div>  
        <div class="product-content">
            <?php echo $product->content?>
        </div>  
    </div>
</div>