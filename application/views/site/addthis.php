<input type="checkbox" id="show-menu" role="button">
<div id="navigation">
    <div id="mobile-navigation">
        <form class="form-global-search" action="<?php echo site_url('product/search')?>" method="get">
            <input type="text" aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="form-control ui-autocomplete-input" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($key) ? $key : ''?>" name="key-search" id="text-search">
        </form>

        <label for="show-menu" class="show-menu">
            <span></span>
            <span></span>
            <span></span>
        </label>   
    </div>
    
    <div id="menu">
        <a href="<?php echo base_url()?>" class="homepage" onfocus="blurLink(this);" class="current">Trang chủ</a>
        <a href="<?php echo base_url()?>thong-tin-ve-chung-toi.html" class="introduce" onfocus="blurLink(this);">Giới thiệu</a>
        <a href="<?php echo base_url()?>san-pham.html" class="product" onfocus="blurLink(this);">Sản phẩm</a>
        <a href="<?php echo base_url()?>dich-vu.html" class="service" onfocus="blurLink(this);">Dịch vụ </a>
        <a href="<?php echo base_url()?>lien-he.html" class="contact" onfocus="blurLink(this);">Liên hệ</a>
        <span></span>
        <form method="get" class="form-global-search" action="<?php echo site_url('product/search')?>" >
            <input type="text" aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="form-control ui-autocomplete-input" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($key) ? $key : ''?>" name="key-search" id="text-search">
        </form>
    </div>   
</div>



