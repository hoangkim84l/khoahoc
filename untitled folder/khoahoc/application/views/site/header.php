<!-- <div id="headerTop">
     <div id="language">
        <form action="<?php echo site_url('product/search')?>" method="get">
             <input type="text" aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="ui-autocomplete-input" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($key) ? $key : ''?>" name="key-search" id="text-search">
             <input type="submit" value="Tìm kiếm" class="btn btn-default" name="but" id="but">
        </form>
    </div> 
    <div id="topLinks">
        <ul>
            <li>
                <!-- <a href="en/meta-navigation-header/news.html" onfocus="blurLink(this);">Tin tức</a>
            </li>
        </ul>
    </div>
    <div class="clear"></div>
</div> -->
<div id="logo" style="margin-top: 10px;">
    <a href="<?=site_url()?>">
        <img title="<?=$supports->name?>" alt="<?=$supports->name?>" style="height: 100px;margin-left: 10px;" src="<?php echo base_url('upload/logo/'.$supports->image_link)?>"/>
    </a>
    <h1><?=$supports->name?></h1>
</div>