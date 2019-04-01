<!-- ********** Hero Area Start ********** -->
<div class="hero-area height-600 bg-img background-overlay" style="background-image: url(<?php echo public_url()?>/site/img/blog-img/bg4.jpg);height: 150px !important;">
    <div class="container h-100">
        <span>Kết quả tìm kiếm Từ khóa "<?php echo $key?>"</span>
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
                                <li class="title">Dự Án</li>
                            </ul>

                            <div class="tab-content" id="myTabContent2">

                                <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                    <div class="row">
                                    <?php if(empty($list)):?>
                                            <h2 style='text-align:center'>Chưa có bài viết nào</h2>
                                        <?php else:?>
                                        <?php foreach($list as $project):?>
                                            <div class="col-md-4">
                                                <!-- Single Blog Post -->
                                                    <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s" style="height:380px;">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="<?php echo base_url('upload/project/'.$project->image_link)?>" alt="<?php echo $project->meta_desc;?>" title="<?php echo $project->meta_key;?>" style="height:190 !important;width:350px !important;">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="<?=site_url('du-an/chi-tiet/'.$project->slug_title.'-'.$project->id)?>" class="headline">
                                                                <h5 style="overflow: hidden;
                                                                            text-overflow: ellipsis;
                                                                            white-space: pre;
                                                                            width:100%;
                                                                            "><?php echo $project->title;?></h5>
                                                            </a>
                                                            <div style="overflow: hidden;
                                                                        text-overflow: ellipsis;
                                                                        white-space: pre;
                                                                        width:100%;
                                                                        height:50px;
                                                                        "><?php echo $project->content?></div>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#">Nguồn : <?php echo $project->author;?> </a> <a href="#" class="post-date"> <?php echo mdate('%d-%m-%Y',$project->created)?></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach;?> 
                                            <?php endif;?>                                       
                                    </div>                                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>