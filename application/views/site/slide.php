<?php 
    $CI =& get_instance();
    $CI->load->model('slide_model');
    $slide_lists = $CI->slide_model->get_list();
?>
<div class="tx-mwimagemap-pi1">
    <div id="mainBanner_oneColumn" class="border mb">
        <ul id="bannerList">
            <?php foreach($slide_lists as $slide_list):?>
            <li>
                <img src="<?php echo base_url('upload/slide/'.$slide_list->image_link)?>" width="860" height="300" id="tx_mwimagemap_img_1" usemap="#map_1" alt="DWK- Duran Wheaton Kimble"/>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
 </div>
