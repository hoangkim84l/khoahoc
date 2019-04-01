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
                            <img src="<?php echo base_url('upload/project/'.$view->image_link)?>" alt="<?php echo $view->meta_desc;?>" title="<?php echo $view->meta_key;?>" style="height:232px !important;">
                           
                        </div>
                        <!-- Post Content -->
                        <div class="post-content"><br/><br/>
                            <a href="<?=site_url('du-an/chi-tiet/'.$view->slug_title.'-'.$view->id)?>" class="headline">
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


<!--SLIDER-->
<div class="slider-home" data-time="3000">
   <div class="title-page">
      <h1>Dự án</h1>
      <h3>Trần Anh Riverside</h3>
   </div>
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
         <div class="item-container">
            <div class="bg-home" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/banner.jpg)"></div>
         </div>
      </div>
   </div>
</div>
<!--SLIDER-->
<!--CONTENT-->
<!--details-->
<section class="project-details">
   <div class="project-logo">
      <div class="logo-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/logo.jpg" alt="Trần Anh Riverside"></div>
   </div>
   <!--nav-->
   <div class="outer-nav">
      <div class="sub-nav">
         <ul>
            <li class="current"><a href="javascript:void(0);" data-name="overview">Tổng quan</a></li>
            <li><a href="javascript:void(0);" data-name="album">Hình ảnh</a></li>
            <li><a href="javascript:void(0);" data-name="location">Vị trí</a></li>
            <li><a href="javascript:void(0);" data-name="facilities">Tiện ích</a></li>
            <li><a href="javascript:void(0);" data-name="products">Sản phẩm</a></li>
            <li><a href="javascript:void(0);" data-name="library">Thư viện</a></li>
            <li><a href="javascript:void(0);" data-name="contact">Liên hệ</a></li>
         </ul>
      </div>
   </div>
   <!--nav-->
   <div class="section-box overview set-post" data-post="overview">
      <div class="overview-info">
         <h3>Tên dự án: <strong>Trần Anh Riverside</strong></h3>
         <h3>Chủ đầu tư: <strong>Trần Anh Group</strong></h3>
      </div>
      <div class="overview-scale">
         <p><strong>QUY MÔ DỰ ÁN</strong><br>Diện tích tổng thể: 11 ha bao gồm:<br>+Đất ở xây dựng tổng diện tích:  49.897m<sup>2</sup> chiếm 44,57%<br>+Nhà phố liên kế - Tổng diện tích: 12.983m<sup>2</sup> chiếm 11.60% gồm 200 căn<br>+Biệt thự song lập - Tổng diện tích: 36.914m<sup>2</sup> chiếm 32.97% gồm 55 căn biệt thự và 225 nền<br>+Đất công cộng (trường học, hành chính,): 4.565m<sup>2</sup> chiếm 4.08%<br>+Đất Công viên cây xanh: 17.687m<sup>2 </sup>chiếm 15.80%<br>+Mặt nước 358m<sup>2</sup> <br>+Đất hạ tầng kỹ thuật (Trạm biến áp, xử lý nước thải…): 421m<sup>2</sup><br>+Đất giao thông: 39.388m<sup>2</sup> chiếm 35.18%<br>+Kích thước: Nhà phố liền kề : 5x15m – 5x20m - Biệt thự song lập 8x15m – 8x20m.</p>
      </div>
   </div>
   <div class="section-box album set-post" data-post="album">
      <div class="title rellax" data-rellax-percentage="0.5" data-rellax-speed="5" data-rellax-y="1">
         <h2>CỘNG ĐỒNG XANH, AN LÀNH CUỘC SỐNG</h2>
      </div>
      <div class="album-box center-paging">
         <div class="album-slider">
            <div class="album-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/pics/1.jpg" alt="Trần Anh Riverside"></div>
            <div class="album-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/pics/2.jpg" alt="Trần Anh Riverside"></div>
            <div class="album-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/pics/3.jpg" alt="Trần Anh Riverside"></div>
         </div>
      </div>
   </div>
   <div class="section-box location set-post" data-post="location">
      <div class="title">
         <h2>Vị trí</h2>
      </div>
      <div class="location-text">
         <p>Dự án bất động sản căn hộ Trần Anh Riverside sở hữu vị trí đắt giá, nằm ngay mặt tiền đường Nguyễn Văn Tuôi thuộc địa phận Huyện Bến Lức, Long An. Mặt trước dự án tiếp giáp quốc lộ 1A, hướng về huyện Bình Chánh, TP.HCM. Mặt sau giáp với sông Vàm Cỏ Đông.</p>
         <p>Từ khu căn hộ, cư dân chỉ mất 6 phút di chuyển đến Trường THCS Thuận Đạo – Trường THPT Nguyễn Trung Trực, 10 phút đến phố tài chính Bến Lức, 12 phút đến CO_OP Mart Bến Lức, 15 phút đến  Bệnh viện đa khoa Bến Lức, 30 phút đến Bình Chánh –  Q6 – TP Hồ Chí Minh.</p>
      </div>
      <div class="location-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/location.jpg" alt="Trần Anh Riverside"></div>
   </div>
   <div class="section-box facilities set-post" data-post="facilities">
      <div class="title">
         <h2>Tiện ích</h2>
      </div>
      <div class="facilities-text">
         <p><strong>Tiện ích nội khu:</strong><br>Những hệ thống tiện ích vượt trội như: Nhà điều hành, đồi cỏ nhung, hồ điều hòa, công viên ven sông, shopping – cửa hàng tiện lợi – minimart, sân tập Yoga – dưỡng sinh, hệ thống giáo dục chuẩn quốc gia, coffee sân thượng, khu vui chơi trẻ em, phòng tập gym…</p>
         <p><strong>Tiện ích ngoại khu:</strong><br>Ngoài hệ thống tiện ích nội khu hoàn hảo, khu dự án Trần Anh Riverside còn sở hữu hệ thống tiện ích ngoại khu đẳng cấp, bao gồm:<br>Hệ thống giáo dục: Ngay trong khu dự án căn hộ Trần Anh Riverside có các hệ thống trường học các cấp như Trường Tiểu học Thị Trấn Bến Lức, Trường THCS Thuận Đạo, Trường TH Thị trấn Bến Lức, Trường THPT Nguyễn Hữu Thọ, trường THPT Nguyễn Trung Trực… <br>Hệ thống y tế: Bệnh viện đa khoa Bến Lức, Trung tâm y tế dự phòng Bến Lức<br>UBND huyện Bến Lức<br>Bến xe Bến Lức – Bưu điện Bến Lức…<br>CO_OP Mart Bến Lức, Chợ Bến Lức, Thế giới di động, Điện máy xanh.<br>Phố tài chính – Ngân hàng như: Agribank – Bến Lức, Sacombank – Thuận Đạo, Vietcombank –  Long An, TMCP Đông Á…<br>Đặc biệt, hiện hữu xung quanh khu đô thị Trần Anh Riverside là hệ thống các khu công nghiệp như: Xưởng thép Cẩm Nguyên – Hòa Phát - Gạch Đồng tâm Long An…thu hút một lượng lớn kỹ sư, chuyên gia trong và ngoài nước về đây làm việc, học tập và sinh sống.</p>
      </div>
      <div class="facilities-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/facilities.jpg" alt="Trần Anh Riverside"></div>
   </div>
   <div class="section-box products set-post" data-post="products">
      <div class="title">
         <h2>Sản phẩm</h2>
      </div>
      <div class="masterplan" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/masterplan.jpg)"></div>
      <div class="model">
         <div class="model-load"></div>
         <div class="model-outer">
            <div class="title">
               <h2>Các sản phẩm</h2>
            </div>
            <div class="model-box blue">
               <div class="model-slider" data-time="5000">
                  <div class="item-box">
                     <div class="item-name">
                        <h3>Biệt thự</h3>
                     </div>
                     <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/products/1.jpg" alt="Biệt thự"></div>
                     <a class="view-project" href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-product-details-ajax.html?id=4"><span></span></a>
                  </div>
                  <div class="item-box">
                     <div class="item-name">
                        <h3>Nhà phố liên kế</h3>
                     </div>
                     <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/products/2.jpg" alt="Nhà phố liên kế"></div>
                     <a class="view-project" href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-product-details-ajax.html?id=5"><span></span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-box library set-post" data-post="library">
      <div class="title">
         <h2>Thư viện</h2>
      </div>
      <div class="library-box">
         <div class="library-pics blue">
            <div class="pic-slider" data-time="6000">
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/24-01-19/h3.jpg" alt="Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 17-01-2019"></div>
                  <div class="item-name">
                     <h3>Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 17-01-2019</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=55" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-12-18/h5.jpg" alt="Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 04-12-2018"></div>
                  <div class="item-name">
                     <h3>Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 04-12-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=52" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/25-10-18/2-DJI0498.jpg" alt="Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 24-10-2018"></div>
                  <div class="item-name">
                     <h3>Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 24-10-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=47" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/24-10-18/h1.jpg" alt="Hình ảnh thực tế không gian nhà mẫu dự án Trần Anh Riverside"></div>
                  <div class="item-name">
                     <h3>Hình ảnh thực tế không gian nhà mẫu dự án Trần Anh Riverside</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=46" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/trananh-25-06/DJI0906-4.jpg" alt="Hình ảnh thực tế dự án Trần Anh Riverisde cập nhật ngày 25/06/2018"></div>
                  <div class="item-name">
                     <h3>Hình ảnh thực tế dự án Trần Anh Riverisde cập nhật ngày 25/06/2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=45" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/trananh-22-03/h4.jpg" alt="Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 22-03-2018"></div>
                  <div class="item-name">
                     <h3>Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 22-03-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=44" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/trananh-24-09/h3.jpg" alt="Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 24-09-2018"></div>
                  <div class="item-name">
                     <h3>Hình ảnh thực tế dự án Trần Anh Riverside cập nhật ngày 24-09-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=43" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/library/1.jpg" alt="Nội thất nhà mẫu"></div>
                  <div class="item-name">
                     <h3>Nội thất nhà mẫu</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=21" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/library/2.jpg" alt="Phối cảnh 3D"></div>
                  <div class="item-name">
                     <h3>Phối cảnh 3D</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=14" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/library/thumb.jpg" alt="Isometric"></div>
                  <div class="item-name">
                     <h3>Isometric</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=22" class="view-album"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/22-03-18/tran-anh/h1.jpg" alt="TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 01-03-2018"></div>
                  <div class="item-name">
                     <h3>TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 01-03-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-album.html?id=32" class="view-album"><span></span></a>
               </div>
            </div>
         </div>
      </div>
      <div class="library-box">
         <div class="library-video blue">
            <div class="pic-slider" data-time="6000">
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/18-01-19/h1.jpg" alt="Tiến độ dự án Trần Anh Riverside cập nhật ngày 17-01-2019"></div>
                  <div class="item-name">
                     <h3>Tiến độ dự án Trần Anh Riverside cập nhật ngày 17-01-2019</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=60" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/05-12-18/h1.jpg" alt="Tiến độ dự án Trần Anh Riverside cập nhật ngày 04-12-2018"></div>
                  <div class="item-name">
                     <h3>Tiến độ dự án Trần Anh Riverside cập nhật ngày 04-12-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=56" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/24-10-18/1-DJI0509.jpg" alt="Tiến độ dự án Trần Anh Riverside cập nhật ngày 24-10-2018"></div>
                  <div class="item-name">
                     <h3>Tiến độ dự án Trần Anh Riverside cập nhật ngày 24-10-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=53" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/25-09-18/DJI0288-1.jpg" alt="Tiến độ dự án Trần Anh Riverside cập nhật ngày 24-09-18"></div>
                  <div class="item-name">
                     <h3>Tiến độ dự án Trần Anh Riverside cập nhật ngày 24-09-18</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=49" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-09-18/DJI0890-2.jpg" alt="TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 23-08-2018"></div>
                  <div class="item-name">
                     <h3>TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 23-08-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=38" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-09-18/DJI0906-4.jpg" alt="TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 23-07-2018"></div>
                  <div class="item-name">
                     <h3>TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 23-07-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=37" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-09-18/DJI0932-5.jpg" alt="TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 26-06-2018"></div>
                  <div class="item-name">
                     <h3>TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 26-06-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=36" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-09-18/DJI0884-1.jpg" alt="TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 02-06-2018"></div>
                  <div class="item-name">
                     <h3>TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 02-06-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=35" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-04-18/H1.JPG" alt="TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 04-04-2018"></div>
                  <div class="item-name">
                     <h3>TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 04-04-2018</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=33" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/video/1.jpg" alt="Trần Anh Riverside"></div>
                  <div class="item-name">
                     <h3>Trần Anh Riverside</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=5" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/22-03-18/TRAN-ANH-EDIT.jpg" alt="TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 23-11-2017"></div>
                  <div class="item-name">
                     <h3>TIẾN ĐỘ DỰ ÁN TRẦN ANH RIVERSIDE CẬP NHẬT NGÀY 23-11-2017</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=28" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/22-03-18/H8.jpg" alt="LỄ MỞ BÁN DỰ ÁN TRẦN ANH RIVERSIDE - GIAI ĐOẠN 1"></div>
                  <div class="item-name">
                     <h3>LỄ MỞ BÁN DỰ ÁN TRẦN ANH RIVERSIDE - GIAI ĐOẠN 1</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=29" class="view-video"><span></span></a>
               </div>
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/22-03-18/8.JPG" alt="LỄ MỞ BÁN DỰ ÁN TRẦN ANH RIVERSIDE - GIAI ĐOẠN 2"></div>
                  <div class="item-name">
                     <h3>LỄ MỞ BÁN DỰ ÁN TRẦN ANH RIVERSIDE - GIAI ĐOẠN 2</h3>
                  </div>
                  <a href="javascript:void(0);" data-href="http://www.diaoctrananh.com/view-video.html?id=30" class="view-video"><span></span></a>
               </div>
            </div>
         </div>
         <div class="library-brochure blue">
            <div class="pic-slider" data-time="6000">
               <div class="item-box">
                  <div class="item-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/brochure/1.jpg" alt="BROCHURE DOWNLOAD"></div>
                  <div class="item-name">
                     <h3>BROCHURE DOWNLOAD</h3>
                  </div>
                  <a href="http://www.diaoctrananh.com/pdf/brochure-tran-anh_vi_1510295031.pdf" target="_blank" class="brochure-but"><span></span></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-box contact set-post" data-post="contact">
      <div class="title">
         <h2>Liên hệ dự án</h2>
      </div>
      <div class="project-contact" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/contact.jpg)">
         <div class="info-project rellax"  data-rellax-percentage="0.5" data-rellax-speed="-2">
            <div class="info-main">
               <div class="info-logo"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/tran-anh-riverside/logo.jpg" alt="Trần Anh Riverside"></div>
               <div class="info-link">
                  <span>Thông tin dự án chi tiết</span>
                  <a href="http://trananhriverside.vn" target="_blank">trananhriverside.vn</a>
               </div>
            </div>
            <ul class="info-extra">
               <li>Tel: 0931 539 292</li>
               <li>Email: <a href="mailto:trananh@diaoctrananh.com.vn">info@diaoctrananh.com.vn</a></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!--details-->
<section class="project-group">
   <div class="title">
      <h2>Các dự án khác</h2>
   </div>
   <div class="group-box center-no-paging blue">
      <div class="group-slider">
         <div class="group-item">
            <div class="group-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/phuc-an-city.jpg" alt="Phúc An City"></div>
            <div class="group-text">
               <h3><strong>Phúc An</strong> City</h3>
            </div>
            <a href="http://www.diaoctrananh.com/vi/du-an/phuc-an-city.html" class="go-project" ></a>
         </div>
         <div class="group-item">
            <div class="group-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/bella-villa.jpg" alt="Bella Villa"></div>
            <div class="group-text">
               <h3><strong>Bella </strong>Villa</h3>
            </div>
            <a href="http://www.diaoctrananh.com/vi/du-an/bella-villa.html" class="go-project" ></a>
         </div>
         <div class="group-item">
            <div class="group-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/bella-vista.jpg" alt="Bella Vista"></div>
            <div class="group-text">
               <h3><strong>Bella</strong> Vista</h3>
            </div>
            <a href="http://www.diaoctrananh.com/vi/du-an/bella-vista.html" class="go-project" ></a>
         </div>
         <div class="group-item">
            <div class="group-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/my-hanh-hoang-gia.jpg" alt="Mỹ Hạnh Hoàng Gia"></div>
            <div class="group-text">
               <h3><strong>Mỹ Hạnh</strong> Hoàng Gia</h3>
            </div>
            <a href="http://www.diaoctrananh.com/vi/du-an/my-hanh-hoang-gia.html" class="go-project" ></a>
         </div>
         <div class="group-item">
            <div class="group-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/projects/bao-ngoc-residence.jpg" alt="Bảo Ngọc Residence"></div>
            <div class="group-text">
               <h3><strong>Bảo Ngọc</strong> Residence</h3>
            </div>
            <a href="http://www.diaoctrananh.com/vi/du-an/bao-ngoc-residence.html" class="go-project" ></a>
         </div>
      </div>
   </div>
</section>
<!--CONTENT-->