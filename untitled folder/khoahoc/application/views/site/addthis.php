
<label for="show-menu" class="show-menu">Show Menu</label>
    <input type="checkbox" id="show-menu" role="button">
    <ul id="menu">
    <li id="subMenu509">
        <a href="<?php echo base_url()?>" class="homepage" onfocus="blurLink(this);" class="current">Trang chủ</a>
    </li>
    <li id="subMenu509">
        <a href="<?php echo base_url()?>thong-tin-ve-chung-toi.html" class="introduce" onfocus="blurLink(this);">Giới thiệu</a>
    </li>
    <li id="subMenu509">
        <a href="<?php echo base_url()?>san-pham.html" class="product" onfocus="blurLink(this);">Sản phẩm</a>
        <div class="subNav">
            <ul class="hidden">
            <?php foreach ($catalog_list as $row):?>
               <li style="border-bottom: 1px solid #ccc;width: 110px;">
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
        </div>
    </li>
    <li id="subMenu509">
        <a href="<?php echo base_url()?>dich-vu.html" class="service" onfocus="blurLink(this);">Dịch vụ </a>
    <li id="subMenu509">
        <a href="<?php echo base_url()?>lien-he.html" class="contact" onfocus="blurLink(this);">Liên hệ</a>
    </li>
    <li id="subMenu509" class="custom-search">
        <div id="cus-search">
            <form action="<?php echo site_url('product/search')?>" method="get">
                 <input type="text" style="margin-top: 3px;"  aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="form-control ui-autocomplete-input" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($key) ? $key : ''?>" name="key-search" id="text-search">
                 <!-- <input type="submit" value="Tìm kiếm" class="btn btn-default" name="but" id="but"> -->
            </form>
        </div>
    </li>
    </ul>