<ul class="navigation">
    <li id="subMenu12">
        <a href="<?php echo base_url()?>" class="homepage" onfocus="blurLink(this);" class="current">Trang chủ</a>
    </li>
    <li id="subMenu536">
        <a href="<?php echo base_url()?>thong-tin-ve-chung-toi.html" class="introduce" onfocus="blurLink(this);">Giới thiệu</a>
    </li>
    <li id="subMenu40">
        <a href="<?php echo base_url()?>san-pham.html" class="product" onfocus="blurLink(this);">Sản phẩm</a>
        <div class="subNav">
            <ul>
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
    <li id="subMenu40">
        <a href="<?php echo base_url()?>dich-vu.html" class="service" onfocus="blurLink(this);">Dịch vụ </a>
    <li id="subMenu509">
        <a href="<?php echo base_url()?>lien-he.html" class="contact" onfocus="blurLink(this);">Liên hệ</a>
    </li>
</ul>