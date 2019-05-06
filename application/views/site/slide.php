<?php 
    $CI =& get_instance();
    $CI->load->model('slide_model');
    $slide_lists = $CI->slide_model->get_list(0,2);
?>
<div class="tx-mwimagemap-pi1">
    <div id="mainBanner_oneColumn">
        <ul id="bannerList">
            <?php foreach($slide_lists as $slide_list):?>
            <li>
                <a href="<?php echo $slide_list->link;?>" target="_blank">
                    <img class="img-responsive"   
                         id="tx_mwimagemap_img_1" 
                         usemap="#map_1" 
                         alt="<?php echo $slide_list->name;?>" 
                         src="<?php echo base_url('upload/slide/'.$slide_list->image_link)?>" />
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>

