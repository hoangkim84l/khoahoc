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
																		width: 100%;
																		height: 30px;
																		margin-left: 6px;
																		margin-top: -8px;
																		margin-bottom: 10px;
																		font-size: 16px;
																		font-family: arial;
                                                                        "><?php echo $project->intro?></div>
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


<!--SLIDER-->
<div class="slider-inner" data-time="3000">
   <div class="title-page">
      <h1>Dự án</h1>
   </div>
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
         <div class="item-container">
            <div class="bg-inner" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/background/bg3.jpg)"></div>
         </div>
      </div>
   </div>
</div>
<!--SLIDER-->
<!--CONTENT-->
<section class="projects">
   <div class="project-item ani-text">
      <span class="project-bg"></span>
      <div class="project-title">
         <span>Khu dự án</span>
         <h3><strong>Trần Anh</strong> Riverside</h3>
         <span class="project-num">01</span>
      </div>
      <div class="project-box">
         <div class="project-pic">
            <div class="bg-cover"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside.jpg" alt="Trần Anh Riverside"></div>
         </div>
         <div class="project-text">
            <p>Diện tích tổng thể: 11 ha bao gồm:<br>+Đất ở xây dựng tổng diện tích:  49.897m<sup>2</sup> chiếm 44,57%<br>+Nhà phố liên kế - Tổng diện tích: 12.983m<sup>2</sup> chiếm 11.60% gồm 200 căn<br>+Biệt thự song lập - Tổng diện tích: 36.914m<sup>2</sup> chiếm 32.97% gồm 55 căn biệt thự và 225 nền<br>+Đất công cộng (trường học, hành chính) : 4.565m<sup>2</sup> chiếm 4.08%<br>+Đất Công viên cây xanh: 17.687m<sup>2</sup> chiếm 15.80%<br>+Mặt nước 358m<sup>2</sup><br>+Đất hạ tầng kỹ thuật (Trạm biến áp, xử lý nước thải…): 421m<sup>2</sup><br>+Đất giao thông: 39.388m<sup>2 </sup>chiếm 35.18%<br>+Kích thước: Nhà phố liền kề : 5x15m – 5x20m - Biệt thự song lập 8x15m – 8x20m.</p>
         </div>
         <div class="project-but"><a href="http://www.diaoctrananh.com/vi/du-an/tran-anh-riverside.html"><span></span>Xem Chi Tiết</a></div>
      </div>
   </div>
   <div class="project-item ani-text">
      <span class="project-bg"></span>
      <div class="project-title">
         <span>Khu đô thị</span>
         <h3><strong>Phúc An</strong> City</h3>
         <span class="project-num">02</span>
      </div>
      <div class="project-box">
         <div class="project-pic">
            <div class="bg-cover"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/phuc-an-city.jpg" alt="Phúc An City"></div>
         </div>
         <div class="project-text">
            <p>Diện tích tổng thể: 100 ha bao gồm:<br>+ Đất ở (nhà liên kế, nhà phố, chung cư kết hợp thương mại dịch vụ..):  390169.44 m<sup>2</sup><br>+ Đất công cộng (trường học, hành chính, viện dưỡng lão…) : 68800.34 m<sup>2</sup><br>+ Đất cây xanh: 221538.52 m<sup>2</sup><br>+ Đất hạ tầng kỹ thuật (trung chuyển nước, xử lý nước thải…): 5907.48 m<sup>2</sup> .<br>+ Đất giao thông: 310704.19 m<sup>2</sup><br>+ Kích thước nền: 5x16m, 5x17m, 5x20m, 7x17m, 7x20m, 8x17m, 10x17m…</p>
         </div>
         <div class="project-but"><a href="http://www.diaoctrananh.com/vi/du-an/phuc-an-city.html"><span></span>Xem Chi Tiết</a></div>
      </div>
   </div>
   <div class="project-item ani-text">
      <span class="project-bg"></span>
      <div class="project-title">
         <span>Khu biệt thự cao cấp</span>
         <h3><strong>Bella </strong>Villa</h3>
         <span class="project-num">03</span>
      </div>
      <div class="project-box">
         <div class="project-pic">
            <div class="bg-cover"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/bella-villa.jpg" alt="Bella Villa"></div>
         </div>
         <div class="project-text">
            <p>Tổng diện tích xây dựng: 92.945 m<sup>2</sup> với 422 căn nhà phố và biệt thự, bao gồm:<br>+ 187 căn biệt thự<br>+ 235 căn nhà phố<br>+ Đất công viên cây xanh: 8.052m<sup>2</sup><br>+ Đất thương mại (siêu thị, club house…): 5.598 m<sup>2</sup><br>+ Đất hạ tầng kĩ thuật – giao thông: 35.077m<sup>2</sup><br>+ Đất mặt nước tự nhiên: 4.610m<sup>2</sup></p>
         </div>
         <div class="project-but"><a href="http://www.diaoctrananh.com/vi/du-an/bella-villa.html"><span></span>Xem Chi Tiết</a></div>
      </div>
   </div>
   <div class="project-item ani-text">
      <span class="project-bg"></span>
      <div class="project-title">
         <span>Khu đô thị</span>
         <h3><strong>Bella</strong> Vista</h3>
         <span class="project-num">04</span>
      </div>
      <div class="project-box">
         <div class="project-pic">
            <div class="bg-cover"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/bella-vista.jpg" alt="Bella Vista"></div>
         </div>
         <div class="project-text">
            <p>Tổng diện tích xây dựng: 75 ha, trong đó:<br>+ Khu biệt thự nhà phố: 2400 nền chiếm 24% tổng diện tích.<br>+ Đất cây xanh mặt nước: 180.000 m<sup>2</sup> chiếm 18% tổng diện tích.<br>+ Đất dịch vụ, hạ tầng kỹ thuật: chiếm 58% tổng diện tích.</p>
         </div>
         <div class="project-but"><a href="http://www.diaoctrananh.com/vi/du-an/bella-vista.html"><span></span>Xem Chi Tiết</a></div>
      </div>
   </div>
   <div class="project-item ani-text">
      <span class="project-bg"></span>
      <div class="project-title">
         <span>Khu dân cư</span>
         <h3><strong>Mỹ Hạnh</strong> Hoàng Gia</h3>
         <span class="project-num">05</span>
      </div>
      <div class="project-box">
         <div class="project-pic">
            <div class="bg-cover"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/my-hanh-hoang-gia.jpg" alt="Mỹ Hạnh Hoàng Gia"></div>
         </div>
         <div class="project-text">
            <p>Tổng diện tích xây dựng: 50 ha, trong đó:<br>+ Diện tích đất nền: 2500 m<sup>2</sup><br>+ Hồ sinh thái: 15 ha.<br>+ Công viên cây xanh: 20.000 m<sup>2</sup>.</p>
         </div>
         <div class="project-but"><a href="http://www.diaoctrananh.com/vi/du-an/my-hanh-hoang-gia.html"><span></span>Xem Chi Tiết</a></div>
      </div>
   </div>
   <div class="project-item ani-text">
      <span class="project-bg"></span>
      <div class="project-title">
         <span>Khu dân cư</span>
         <h3><strong>Bảo Ngọc</strong> Residence</h3>
         <span class="project-num">06</span>
      </div>
      <div class="project-box">
         <div class="project-pic">
            <div class="bg-cover"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/bao-ngoc-residence.jpg" alt="Bảo Ngọc Residence"></div>
         </div>
         <div class="project-text">
            <p>Diện tích tổng thể: 12 ha, bao gồm: <br>+ 8 tiểu khu, mỗi tiểu khu được thiết kế theo lối kiến trúc hiện đại của một vùng kinh tế phát triển vượt bật trong tương lai, nhưng không làm mất đi vẻ đẹp thiên nhiên huyền bí.</p>
         </div>
         <div class="project-but"><a href="http://www.diaoctrananh.com/vi/du-an/bao-ngoc-residence.html"><span></span>Xem Chi Tiết</a></div>
      </div>
   </div>
</section>
<!--CONTENT-->