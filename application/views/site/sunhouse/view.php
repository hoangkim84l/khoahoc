<div class="container" style="padding-top:150px">
    <div class="row"><div class="col-12 col-md-6 col-lg-12">
        <!-- ********** Hero Area Start ********** -->
   <div class="hero-area height-600 bg-img background-overlay" style="background-image: url(<?php echo public_url()?>/site/img/blog-img/bg2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-8 col-lg-12">
                    <div class="single-blog-title text-center">
                    <h3><?php echo $info->title?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row ">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author"><?php echo $info->author?></a> on <a href="#" class="post-date"><?php echo mdate('%d-%m-%Y',$info->created)?></a></p>
                        </div>                        
                        <!-- Post Content -->
                        <div class="post-content">
                                              
                        <span style="color:#fff">
                            <?php echo $info->content?> 
                        </span>
                        <!-- Post Tags -->
                            <ul class="post-tags">
                                <li><a href="#"><?php echo $info->meta_key?></a></li>
                                <li><a href="#"><?php echo $info->meta_desc?></a></li>
                            </ul>
                            <!-- Post Meta -->
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author"><?php echo $info->author?></a> on <a href="#" class="post-date"><?php echo mdate('%d-%m-%Y',$info->created)?></a></p>
                            </div>
                        </div>
                    </div>
                </div>

              

            <!-- ============== Related Post ============== -->
            <div class="col-12 col-lg-12">
                 <?php foreach($maxView as $view):?>
                <div class="col-12 col-md-6 col-lg-4">                   
                    <!-- Single Blog Post -->
                    <div class="single-blog-post resizerecom" style="height:380px;">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="<?php echo base_url('upload/sunhouse/'.$view->image_link)?>" alt="<?php echo $view->meta_desc;?>" title="<?php echo $view->meta_key;?>" style="height:232px !important;">
                           
                        </div>
                        <!-- Post Content -->
                        <div class="post-content"><br/><br/>
                            <a href="<?=site_url('nha-pho/chi-tiet/'.$view->slug_title.'-'.$view->id)?>" class="headline">
                                                                <h5 style="overflow: hidden;
                                                                            text-overflow: ellipsis;
                                                                            white-space: pre;
                                                                            width:100%;
                                                                            "><?php echo $view->title;?></h5>
                            </a>
                            
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#">Nguồn : <?php echo $view->author;?> </a> <a href="#" class="post-date"> <?php echo mdate('%d-%m-%Y',$view->created)?></a></p>
                            </div>
                        </div>
                    </div>                    
                </div>       
               <?php endforeach;?>
            </div>


            <div id="fb-root"></div>
            <script src="http://connect.facebook.net/vi_VN/all.js#appId=170796359666689&amp;xfbml=1"></script>

            <div class="fb-comments" data-href="<?php echo current_url() ?>"  data-num-posts="15" data-width="100%"  data-colorscheme="light">   </div>
        </div>
    </div></div>
    </div>
</div>
