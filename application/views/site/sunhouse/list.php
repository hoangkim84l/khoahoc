<!-- ********** Hero Area Start ********** -->
<div class="hero-area height-600 bg-img background-overlay" style="background-image: url(<?php echo public_url()?>/site/img/blog-img/bg4.jpg);height: 150px !important;">
    <div class="container h-100">
    </div>
</div>
<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-12">
                    <div class="post-content-area mb-50">
<div class="world-catagory-area mt-50">
    <ul class="nav nav-tabs" id="myTab2" role="tablist">
        <li class="title">Nhà Phố</li>

        
    </ul>

    <div class="tab-content" id="myTabContent2">

        <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
            <div class="row">
            <?php if(empty($list)):?>
						           <h2 style='text-align:center'>Chưa có bài viết nào</h2>
						    <?php else:?>
                <?php foreach($list as $sunhouse):?>
                <div class="col-12 col-md-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s" style="height:380px;">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="<?php echo base_url('upload/sunhouse/'.$sunhouse->image_link)?>" alt="<?php echo $sunhouse->meta_desc;?>" title="<?php echo $sunhouse->meta_key;?>" style="height:190 !important;width:350px !important;">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="<?=site_url('nha-pho/chi-tiet/'.$sunhouse->slug_title.'-'.$sunhouse->id)?>" class="headline">
                                <h5 style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            white-space: pre;
                                            width:100%;
                                            "><?php echo $sunhouse->title;?></h5>
                            </a>
                            <div style="overflow: hidden;
										text-overflow: ellipsis;
										white-space: pre;
										width: 100%;
										height: 30px;
										margin-left: 6px;
										margin-top: -8px;
										margin-bottom: 10px;
										font-size: 16px;
										font-family: arial;"><?php echo $sunhouse->intro?></div>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#">Nguồn : <?php echo $sunhouse->author;?> </a> <a href="#" class="post-date"> <?php echo mdate('%d-%m-%Y',$sunhouse->created)?></a></p>
                            </div>
                        </div>
                    </div>
                    </div>
                <?php endforeach;?>  
                <?php endif;?> 
                <div class='pagination'>
		            	<?php echo $this->pagination->create_links();?>
		            </div> 
                </div>

    </div>
</div>
</div>
</div>
</div>
</div>
</div>