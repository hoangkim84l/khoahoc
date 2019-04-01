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
                    <div class="single-blog-post" style="height:380px;">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="<?php echo base_url('upload/news/'.$view->image_link)?>" alt="<?php echo $view->meta_desc;?>" title="<?php echo $view->meta_key;?>" style="height:232px !important;">
                           
                        </div>
                        <!-- Post Content -->
                        <div class="post-content"><br/><br/>
                            <a href="<?=site_url('bai-viet/chi-tiet/'.$view->slug_title.'-'.$view->id)?>" class="headline">
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
<div class="slider-inner" data-time="3000">
   <div class="title-page">
      <h1>Tin tức</h1>
   </div>
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
         <div class="item-container">
            <div class="bg-inner" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/background/bg10.jpg)"></div>
         </div>
      </div>
   </div>
</div>
<!--SLIDER-->
<!--CONTENT-->
<section class="news-content">
   <!--SUB-MENU-->
   <div class="outer-nav">
      <div class="sub-nav">
         <ul>
            <li class="current" ><a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an.html">Tin dự án</a></li>
            <li  ><a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-thi-truong.html">Tin thị trường</a></li>
            <li  ><a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-cong-ty.html">Tin công ty</a></li>
         </ul>
      </div>
   </div>
   <!--SUB-MENU-->
   <!--load-->
   <div class="news-bg">
      <div class="news-load"></div>
   </div>
   <!--/load-->
   <div class="news-relation">
      <div class="news-box ani-text">
         <div class="title">
            <h2>Tin liên quan</h2>
         </div>
         <div class="scroll-slide">
            <div class="news-link center-no-paging">
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/bat-dong-san-tay-bac-tphcm-van-la-tam-diem-thu-hut-dau-tu.html" data-details="news-223" data-title="Bất động sản Tây Bắc TP.HCM vẫn là tâm điểm thu hút đầu tư" data-description="Trước tình trạng quỹ đất TP.HCM ngày càng hạn hẹp, các chính sách pháp lý bị thắt chặt. Bất động sản vùng ven trở nên sôi động, đặc biệt các tỉnh giáp ranh và lân cận TP.HCM trở thành tâm điểm của các nhà đầu tư địa ốc." data-keyword="Trần Anh Group, Phúc An City, Bella Villa, Bất động sản Tây Bắc TP.HCM, Bất động sản Long An, Hạ tầng giao thông, Bất động sản vùng ven, Tân An - Long An"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/30-03-19/1-Hinh-1.jpg" alt="Bất động sản Tây Bắc TP.HCM vẫn là tâm điểm thu hút đầu tư"></div>
                  <div class="link-text">
                     <h3>Bất động sản Tây Bắc TP.HCM vẫn là tâm điểm thu hút đầu tư</h3>
                  </div>
                  <span class="news-icon"></span>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tran-anh-group-gap-rut-hoan-thien-nha-o-sieu-re-cho-nguoi-thu-nhap-thap.html" data-details="news-210" data-title="Tran Anh Group gấp rút hoàn thiện nhà ở “siêu rẻ” cho người thu nhập thấp" data-description="Nhằm đáp ứng nhu cầu nhận nhà mới đón Tết của khách hàng, Tran Anh Group đang tập trung hết công suất để hoàn thành các hạng mục cuối cùng của dự án nhà ở giá rẻ tại Khu đô thị Phúc An City. Theo đại diện công ty, sẽ có 790 căn hộ với giá 198 triệu đồng đ" data-keyword="Trần Anh Group, Phúc An City, Bất động sản Long An, nhà ở giá rẻ, Đức Hòa - Long An, nhà ở xã hội"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/27-12-18/2.JPG" alt="Tran Anh Group gấp rút hoàn thiện nhà ở “siêu rẻ” cho người thu nhập thấp"></div>
                  <div class="link-text">
                     <h3>Tran Anh Group gấp rút hoàn thiện nhà ở “siêu rẻ” cho người thu nhập thấp</h3>
                  </div>
                  <span class="news-icon"></span>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/long-an-sap-co-gan-800-can-ho-gia-200-trieu-dong.html" data-details="news-206" data-title="Long An sắp có gần 800 căn hộ giá 200 triệu đồng" data-description="790 căn hộ với giá 198 triệu đồng sẽ được bàn giao cho khách hàng kịp đón tết. Đây là một trong những dự án nhà giá rẻ đầu tiên tại Long An học tập mô hình nhà ở xã hội giá rẻ tại Bình Dương." data-keyword="Trần Anh Group, Phúc An City, Đức Hòa - Long An, bất động sản Long An, nhà ở xã hội, nhà ở giá rẻ,"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/21-12-18/h1.jpg" alt="Long An sắp có gần 800 căn hộ giá 200 triệu đồng"></div>
                  <div class="link-text">
                     <h3>Long An sắp có gần 800 căn hộ giá 200 triệu đồng</h3>
                  </div>
                  <span class="news-icon"></span>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/long-an-cuoi-thang-12-se-ban-giao-gan-800-can-ho-gia-re-cho-cong-nhan-lao-dong.html" data-details="news-203" data-title="Long An: Cuối tháng 12 sẽ bàn giao gần 800 căn hộ giá rẻ cho công nhân lao động" data-description="Theo kế hoạch, cuối tháng 12 này, Trần Anh Group sẽ bàn giao 790 căn hộ có diện tích 30m2 dành cho công nhân và người lao động có thu nhập thấp tại Đức Hòa, Long An với giá gần 200 triệu đồng/căn." data-keyword="Trần Anh Group, Phúc An City, Khu đô thị Phúc An City, bất động sản Đức Hòa, Đức Hòa - Long An, bất động sản Long An, nhà ở giá rẻ, lao động có thu nhập thấp"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/15-12-18/3.JPG" alt="Long An: Cuối tháng 12 sẽ bàn giao gần 800 căn hộ giá rẻ cho công nhân lao động"></div>
                  <div class="link-text">
                     <h3>Long An: Cuối tháng 12 sẽ bàn giao gần 800 căn hộ giá rẻ cho công nhân lao động</h3>
                  </div>
                  <span class="news-icon"></span>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tran-anh-reverside-khu-do-thi-view-song-dang-song.html" data-details="news-151" data-title="Trần Anh Reverside: Khu đô thị view sông đáng sống" data-description="Tọa lạc ngay trung tâm thị trấn huyện Bến Lức, Long An, Trần Anh Riverside là dự án khu đô thị sinh thái hiếm hoi được đông đảo giới đầu tư quan tâm. Vị trí dự án rất thuận lợi liên kết vùng rất tốt, được đầu tư rất nhiều tiện ích cao cấp dành cho giới th" data-keyword="Trần Anh Riverside, Bến Lức - Long An, Nhà phố liên kế, Biệt thự cao cấp, sông Vàm Cỏ Đông, Trần Anh Group, Bất động sản Long An"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-09-ta/DJI0906-4.jpg" alt="Trần Anh Reverside: Khu đô thị view sông đáng sống"></div>
                  <div class="link-text">
                     <h3>Trần Anh Reverside: Khu đô thị view sông đáng sống</h3>
                  </div>
                  <span class="news-icon"></span>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tiem-nang-sinh-loi-lon-cua-tran-anh-riverside.html" data-details="news-150" data-title="Tiềm năng sinh lời lớn của Trần Anh Riverside" data-description="Trần Anh Riverside là dự án hội tụ đầy đủ những yếu tố, tiêu chí kiên quyết để gia tăng tỉ suất sinh lời, ảnh hưởng tới quyết định nên hay không nên xuống tiền đầu tư lâu dài dành cho những nhà đầu tư và khách hàng." data-keyword="Trần Anh Riverside, Bến Lức - Long An, Biệt thự cao cấp, Nhà phố liên kế, Bất động sản Long An, sông Vàm Cỏ Đông, Trần Anh Group"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/04-09-ta/h1.1.jpg" alt="Tiềm năng sinh lời lớn của Trần Anh Riverside"></div>
                  <div class="link-text">
                     <h3>Tiềm năng sinh lời lớn của Trần Anh Riverside</h3>
                  </div>
               </div>
               <div class="link-page current">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tran-anh-riverside--vi-the-dac-dia-tu-phia-tay-tphcm.html" data-details="news-148" data-title="Trần Anh Riverside – Vị thế đắc địa từ phía Tây TP.HCM" data-description="Trần Anh Riverside Bến Lức – Long An đang bước vào những khâu cuối cùng hoàn thiện dự án. Với quan niệm “khai môn lập hướng”, Trần Anh lựa chọn thị trường bất động sản phía Tây TP.HCM, nơi hội tụ các yếu tố thuận lợi để đặt dự án tâm huyết của mình." data-keyword="Trần Anh Group, Bất động sản Long An, Trần Anh Riverside, Bến Lức - Long An, Biệt thự ven sông, Sông Vàm Cỏ Đông, nhà phố liên kế"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/18-07-18/h3.jpg" alt="Trần Anh Riverside – Vị thế đắc địa từ phía Tây TP.HCM"></div>
                  <div class="link-text">
                     <h3>Trần Anh Riverside – Vị thế đắc địa từ phía Tây TP.HCM</h3>
                  </div>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/khoi-cong-vien-dieu-duong-quoc-te-phuc-an-2000-ty.html" data-details="news-146" data-title="Khởi công Viện điều dưỡng Quốc tế Phúc An 2.000 tỷ" data-description="Trần Anh Group vừa khởi công xây dựng Viện điều dưỡng Quốc tế Phúc An thuộc dự án Phúc An City tọa lạc xã Mỹ Hạnh Nam, Đức Hòa, Long An." data-keyword="Trần Anh Group, Lễ khởi công, Viện điều dưỡng Phúc An, Phúc An City, Đức Hòa - Long An "></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/18-06-16/h1.jpg" alt="Khởi công Viện điều dưỡng Quốc tế Phúc An 2.000 tỷ"></div>
                  <div class="link-text">
                     <h3>Khởi công Viện điều dưỡng Quốc tế Phúc An 2.000 tỷ</h3>
                  </div>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tran-anh-group-ky-ket-hop-tac-chien-luoc-du-an-long-phu-residence.html" data-details="news-130" data-title="Trần Anh Group: Ký kết hợp tác chiến lược dự án Long Phú Residence" data-description="Ngày 15/3, Trần Anh Group ký kết hợp tác cùng Công ty TNHH Quảng cáo Redbox và Công ty Cổ phần Thương mại và Xây dựng Hà Văn Gia Lộc về hợp tác chiến lược dự án Long Phú Residence.
                     " data-keyword="Trần Anh Group, Công ty CP bất động sản Trần Anh Long An, Bất động sản Long An, Long Phú Residence, Bến Lức - Long An, kí kết hợp tác"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/16-03-18/H9.jpg" alt="Trần Anh Group: Ký kết hợp tác chiến lược dự án Long Phú Residence"></div>
                  <div class="link-text">
                     <h3>Trần Anh Group: Ký kết hợp tác chiến lược dự án Long Phú Residence</h3>
                  </div>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tintuc-02.html" data-details="news-98" data-title="Long An có nhà ở xã hội 198 triệu đồng/căn hộ 30 m2" data-description="Thông tin từ ông Trần Đức Vinh, Tổng giám đốc Công ty Trần Anh Long An, cho biết hiện nay công ty đang đầu tư xây dựng khoảng 800 căn nhà ở xã hội có giá khoảng 198 triệu đồng/căn hộ 30 m2 tại H.Đức Hòa, tỉnh Long An." data-keyword="Trần Anh Group, Công ty CP bất động sản Trần Anh Long An, nhà ở xã hội, Đức Hòa - Long An"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/tin-3/h1.jpg" alt="Long An có nhà ở xã hội 198 triệu đồng/căn hộ 30 m2"></div>
                  <div class="link-text">
                     <h3>Long An có nhà ở xã hội 198 triệu đồng/căn hộ 30 m2</h3>
                  </div>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tintuc-15.html" data-details="news-114" data-title="Trần Anh Group ra mắt biệt thự ven sông tiện ích ở Long An" data-description="Trần Anh Riverside sở hữu ưu thế về vị trí, kết hợp hài hòa giữa kiến trúc xanh cùng phong cách hiện đại và sang trọng. Trần Anh group, khu đô thị Trần Anh Riverside, Bến Lức - Long An, sông Vàm Cỏ Đông, bất động sản Long An" data-keyword="Trần Anh Group, khu đô thị Trần Anh Riverside, Bến Lức - Long An, sông Vàm Cỏ Đông, bất động sản Long An"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/06-12/h1.1.JPG" alt="Trần Anh Group ra mắt biệt thự ven sông tiện ích ở Long An"></div>
                  <div class="link-text">
                     <h3>Trần Anh Group ra mắt biệt thự ven sông tiện ích ở Long An</h3>
                  </div>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tintuc-17.html" data-details="news-116" data-title="Bất động sản Đức Hòa hưởng lợi lớn từ quy hoạch vùng đến năm 2030" data-description="Theo dự đoán về quy hoạch xây dựng vùng TP.HCM đến năm 2030 và tầm nhìn đến năm 2050 thì thị trường bất động sản huyện Đức Hòa, tỉnh Long An (khu Tây Bắc TP.HCM) được cho là hưởng lợi lớn." data-keyword="Trần Anh Group, Công ty CP BĐS Trần Anh Long An, Đức Hòa - Long An, Bella Villa, Biệt thự cao cấp, Nhà phố liên kế, Bất động sản Long An"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/26-01-2018/DHGate-1.jpg" alt="Bất động sản Đức Hòa hưởng lợi lớn từ quy hoạch vùng đến năm 2030"></div>
                  <div class="link-text">
                     <h3>Bất động sản Đức Hòa hưởng lợi lớn từ quy hoạch vùng đến năm 2030</h3>
                  </div>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/tintuc-04.html" data-details="news-106" data-title="Trần Anh Group sắp ra mắt dự án biệt thự cao cấp Bella Villa" data-description="Sáng ngày 28/01/2018, tại dự án Khu đô thị Bella Villa, chủ đầu tư Trần Anh Group sẽ tổ chức lễ công bố dự án biệt thự cao cấp mang tên Bella Villa và gửi lời tri ân đến toàn thể khách hàng. " data-keyword="Trần Anh Group, Công ty CP bất động sản Trần Anh Long An, Khu đô thị Bella Villa, Biệt thự cao cấp, nhà phố liên kế, Bất động sản Long An, Đức Hòa  -Long An"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/tin-tuc/24-01-2018/h1.1.jpg" alt="Trần Anh Group sắp ra mắt dự án biệt thự cao cấp Bella Villa"></div>
                  <div class="link-text">
                     <h3>Trần Anh Group sắp ra mắt dự án biệt thự cao cấp Bella Villa</h3>
                  </div>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/le-mo-ban-giai-doan-1-khu-do-thi-bella-vista.html" data-details="news-105" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/news/projects/1.jpg" alt="LỄ MỞ BÁN GIAI ĐOẠN 1 KHU ĐÔ THỊ BELLA VISTA"></div>
                  <div class="link-text">
                     <h3>LỄ MỞ BÁN GIAI ĐOẠN 1 KHU ĐÔ THỊ BELLA VISTA</h3>
                  </div>
               </div>
               <div class="link-page ">
                  <a href="http://www.diaoctrananh.com/vi/tin-tuc/tin-du-an/long-trong-to-chuc-buoi-le-mo-ban-xuat-quan-giai-doan-2-khu-do-thi-bella-vista.html" data-details="news-102" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group"></a>
                  <div class="pic-thumb"><img src="http://www.diaoctrananh.com/pictures/catalog/news/projects/2.jpg" alt="LONG TRỌNG TỔ CHỨC BUỔI LỄ MỞ BÁN XUẤT QUÂN GIAI ĐOẠN 2 KHU ĐÔ THỊ BELLA VISTA"></div>
                  <div class="link-text">
                     <h3>LONG TRỌNG TỔ CHỨC BUỔI LỄ MỞ BÁN XUẤT QUÂN GIAI ĐOẠN 2 KHU ĐÔ THỊ BELLA VISTA</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--CONTENT-->