<input type="checkbox" id="show-filter" />
<div class="product-category-part">
    <label for="show-filter" class="show-filter">
        <span></span>
        <span></span>
        <span></span>
    </label>
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