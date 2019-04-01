  <!-- ********** Hero Area Start ********** -->
  <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(<?php echo public_url()?>/site/img/blog-img/bg3.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Bài viết mới</li>                               
                            </ul>

                            <div class="tab-content" id="myTabContent">
							<?php if(empty($list)):?>
						           <h2 style='text-align:center'>Chưa có bài viết nào</h2>
						    <?php else:?>
								<?php foreach ($list as $row): ?>
                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="<?php echo base_url('upload/news/'.$row->image_link)?>" alt="<?php echo $row->meta_key; ?>" title="<?php echo $row->meta_desc; ?>">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="<?=site_url('bai-viet/chi-tiet/'.$row->slug_title.'-'.$row->id)?>" class="headline">
                                                <h5 style="overflow: hidden;
															text-overflow: ellipsis;
															white-space: pre;
															width:100%;
															"><?php echo $row->title; ?></h5>
                                            </a>
                                            <p><?php echo $row->intro; ?></p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Nguồn <?php echo $row->author; ?></a> on <a href="#" class="post-date"><?php echo mdate('%d-%m-%Y',$row->created)?> - <?php echo $row->count_view?> lượt xem</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php endforeach; ?>
							<?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Xem Nhiều Nhất</h5>
                            <div class="widget-content">
							<?php if(empty($maxView)):?>
						           <h2 style='text-align:center'>Chưa có bài viết nào</h2>
						    <?php else:?>
								<?php foreach ($maxView as $row2): ?>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
										<img src="<?php echo base_url('upload/news/'.$row2->image_link)?>" alt="<?php echo $row2->meta_key; ?>" title="<?php echo $row2->meta_desc; ?>">
                                     </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
									<a href="<?=site_url('bai-viet/chi-tiet/'.$row2->slug_title.'-'.$row2->id)?>" class="headline">
                                                <h5 style="overflow: hidden;
															text-overflow: ellipsis;
															white-space: pre;
															width:60%;
															"><?php echo $row2->title; ?></h5>
                                            </a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
							<?php endif;?>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <!-- <div class="load-more-btn mt-50 text-center"> -->
					<div class='pagination_news'>
		            	<?php echo $this->pagination->create_links();?>
		            </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

<!--SLIDER-->
<div class="slider-inner" data-time="3000">
   <div class="title-page">
      <h1>Tin tức</h1>
   </div>
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
         <div class="item-container">
            <div class="bg-inner" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/background/bg9.jpg)"></div>
         </div>
      </div>
   </div>
</div>
<!--SLIDER-->
<!--CONTENT-->
<section class="news-content">
   <!--SUB-NAV-->
   <div class="outer-nav">
      <div class="sub-nav">
         <ul>
            <li class="current" ><a class="link-load" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an.html">Tin dự án</a></li>
            <li  ><a class="link-load" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong.html">Tin thị trường</a></li>
            <li  ><a class="link-load" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-cong-ty.html">Tin công ty</a></li>
         </ul>
      </div>
   </div>
   <!--SUB-NAV-->
   <div class="title">
      <h2>Tin dự án</h2>
   </div>
   <div class="news-list">
      <div class="grid">
         <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/27-12-18/2.JPG" alt="Tran Anh Group gấp rút hoàn thiện nhà ở “siêu rẻ” cho người thu nhập thấp"></div>
               <div class="news-text">
                  <h3>Tran Anh Group gấp rút hoàn thiện nhà ở “siêu rẻ” cho người thu nhập thấp</h3>
                  <p>Nhằm đáp ứng nhu cầu nhận nhà mới đón Tết của khách hàng, Tran Anh Group đang tập trung hết công suất để hoàn thành các hạng mục cuối cùng của dự án nhà ở giá rẻ tại Khu đô thị Phúc An City. Theo đại diện công ty, sẽ có 790 căn hộ với giá 198 triệu đồng được bàn giao cho khách hàng trước Tết.</p>
               </div>
               <span class="news-icon"></span><a class="direct-link" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tran-anh-group-gap-rut-hoan-thien-nha-o-sieu-re-cho-nguoi-thu-nhap-thap.html"></a>
            </div>
         </div>
         <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/21-12-18/h1.jpg" alt="Long An sắp có gần 800 căn hộ giá 200 triệu đồng"></div>
               <div class="news-text">
                  <h3>Long An sắp có gần 800 căn hộ giá 200 triệu đồng</h3>
                  <p>790 căn hộ với giá 198 triệu đồng sẽ được bàn giao cho khách hàng kịp đón tết. Đây là một trong những dự án nhà giá rẻ đầu tiên tại Long An học tập mô hình nhà ở xã hội giá rẻ tại Bình Dương.</p>
               </div>
               <span class="news-icon"></span><a class="direct-link" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/long-an-sap-co-gan-800-can-ho-gia-200-trieu-dong.html"></a>
            </div>
         </div>
         <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/15-12-18/3.JPG" alt="Long An: Cuối tháng 12 sẽ bàn giao gần 800 căn hộ giá rẻ cho công nhân lao động"></div>
               <div class="news-text">
                  <h3>Long An: Cuối tháng 12 sẽ bàn giao gần 800 căn hộ giá rẻ cho công nhân lao động</h3>
                  <p>Theo kế hoạch, cuối tháng 12 này, Trần Anh Group sẽ bàn giao 790 căn hộ có diện tích 30m2 dành cho công nhân và người lao động có thu nhập thấp tại Đức Hòa, Long An với giá gần 200 triệu đồng/căn.</p>
               </div>
               <span class="news-icon"></span><a class="direct-link" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/long-an-cuoi-thang-12-se-ban-giao-gan-800-can-ho-gia-re-cho-cong-nhan-lao-dong.html"></a>
            </div>
         </div>
         <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-09-ta/DJI0906-4.jpg" alt="Trần Anh Reverside: Khu đô thị view sông đáng sống"></div>
               <div class="news-text">
                  <h3>Trần Anh Reverside: Khu đô thị view sông đáng sống</h3>
                  <p>Tọa lạc ngay trung tâm thị trấn huyện Bến Lức, Long An, Trần Anh Riverside là dự án khu đô thị sinh thái hiếm hoi được đông đảo giới đầu tư quan tâm. Vị trí dự án rất thuận lợi liên kết vùng rất tốt, được đầu tư rất nhiều tiện ích cao cấp dành cho giới thượng lưu. Tất cả các yếu tố ‘vàng’ đang tạo nên ‘cơn sốt’ cho dự án Trần Anh Riverside trong thời gian qua.</p>
               </div>
               <span class="news-icon"></span><a class="direct-link" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tran-anh-reverside-khu-do-thi-view-song-dang-song.html"></a>
            </div>
         </div>
         <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-09-ta/h1.1.jpg" alt="Tiềm năng sinh lời lớn của Trần Anh Riverside"></div>
               <div class="news-text">
                  <h3>Tiềm năng sinh lời lớn của Trần Anh Riverside</h3>
                  <p>Trần Anh Riverside là dự án hội tụ đầy đủ những yếu tố, tiêu chí kiên quyết để gia tăng tỉ suất sinh lời, ảnh hưởng tới quyết định nên hay không nên xuống tiền đầu tư lâu dài dành cho những nhà đầu tư và khách hàng.</p>
               </div>
               <span class="news-icon"></span><a class="direct-link" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tiem-nang-sinh-loi-lon-cua-tran-anh-riverside.html"></a>
            </div>
         </div>
         <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/18-07-18/h3.jpg" alt="Trần Anh Riverside – Vị thế đắc địa từ phía Tây TP.HCM"></div>
               <div class="news-text">
                  <h3>Trần Anh Riverside – Vị thế đắc địa từ phía Tây TP.HCM</h3>
                  <p>Trần Anh Riverside sau khi hoàn thành</p>
               </div>
               <a class="direct-link" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tran-anh-riverside--vi-the-dac-dia-tu-phia-tay-tphcm.html"></a>
            </div>
         </div>
         <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/18-06-16/h1.jpg" alt="Khởi công Viện điều dưỡng Quốc tế Phúc An 2.000 tỷ"></div>
               <div class="news-text">
                  <h3>Khởi công Viện điều dưỡng Quốc tế Phúc An 2.000 tỷ</h3>
                  <p>Trần Anh Group vừa khởi công xây dựng Viện điều dưỡng Quốc tế Phúc An thuộc dự án Phúc An City tọa lạc xã Mỹ Hạnh Nam, Đức Hòa, Long An.</p>
               </div>
               <a class="direct-link" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/khoi-cong-vien-dieu-duong-quoc-te-phuc-an-2000-ty.html"></a>
            </div>
         </div>
         <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/16-03-18/H9.jpg" alt="Trần Anh Group: Ký kết hợp tác chiến lược dự án Long Phú Residence"></div>
               <div class="news-text">
                  <h3>Trần Anh Group: Ký kết hợp tác chiến lược dự án Long Phú Residence</h3>
                  <p>Ngày 15/3, Trần Anh Group ký kết hợp tác cùng Công ty TNHH Quảng cáo Redbox và Công ty Cổ phần Thương mại và Xây dựng Hà Văn Gia Lộc về hợp tác chiến lược dự án Long Phú Residence.</p>
               </div>
               <a class="direct-link" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tran-anh-group-ky-ket-hop-tac-chien-luoc-du-an-long-phu-residence.html"></a>
            </div>
         </div>
         <div class="grid-item">
            <div class="news-item">
               <div class="news-pic"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/tin-3/h1.jpg" alt="Long An có nhà ở xã hội 198 triệu đồng/căn hộ 30 m2"></div>
               <div class="news-text">
                  <h3>Long An có nhà ở xã hội 198 triệu đồng/căn hộ 30 m2</h3>
                  <p>Thông tin từ ông Trần Đức Vinh, Tổng giám đốc Công ty Trần Anh Long An, cho biết hiện nay công ty đang đầu tư xây dựng khoảng 800 căn nhà ở xã hội có giá khoảng 198 triệu đồng/căn hộ 30 m2 tại H.Đức Hòa, tỉnh Long An.</p>
               </div>
               <a class="direct-link" href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tintuc-02.html"></a>
            </div>
         </div>
      </div>
   </div>
   <div class="page-load-status">
      <div class="loader-ellips infinite-scroll-request">
         <span class="loader-ellips-dot"></span>
         <span class="loader-ellips-dot"></span>
         <span class="loader-ellips-dot"></span>
         <span class="loader-ellips-dot"></span>
      </div>
      <p class="infinite-scroll-error"></p>
   </div>
   <div class="more-box">
      <a class="more-but" href="javascript:void(0);" data-href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an.html"><span>xem thêm</span></a>
      <div class="paging-news-load class-hidden" data-paging="2">1</div>
   </div>
</section>
<!--CONTENT-->