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
                <a href="<?php echo $slide_list->link;?>" 
                    target="_blank">
                    <div class="img" data-preload-image-url="<?php echo base_url('upload/slide/'.$slide_list->image_link)?>"></div>
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>

