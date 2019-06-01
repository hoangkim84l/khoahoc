<div id="leftSide" style="padding-top:30px;">
   <!-- Account panel -->
   <div class="sideProfile">
      <a href="#" title="" class="profileFace">
         <img src="<?php echo public_url('admin')?>/images/user.png" width="40">
      </a>
      <span>Xin chào:
         <strong>admin!</strong>
      </span>
      <div class="clear"></div>
   </div>
   <div class="sidebarSep"></div>
   <!-- Left navigation -->
   <ul id="menu" class="nav">
      <li class="home">
         <a href="<?php echo admin_url()?>" class="active" id="current">
            <span>Bảng điều khiển</span>
            <strong></strong>
         </a>
      </li>
     <!--  <li class="tran">
         <a href="" class="exp inactive">
         <span>Quản lý Dự án</span>
         <strong>1</strong>
         </a>
         <ul style="display: none;" class="sub">
            <li>
               <a href="<?php echo admin_url('transaction')?>">
                Tất cả dự án </a>
               </li>
            <li>
               <a href="<?php echo admin_url('project')?>">
               Tất cả dự án </a>
            </li>
         </ul>
      </li> -->
      <li class="product">
         <a href="" class="exp inactive">
            <span>Sản phẩm</span>
            <strong>2</strong>
         </a>
         <ul style="display: none;" class="sub">
            <li>
               <a href="<?php echo admin_url('product')?>">
                  Sản phẩm                         
               </a>
            </li>
            <li>
               <a href="<?php echo admin_url('catalog')?>">
                  Danh mục                         
               </a>
            </li>
         </ul>
         
      </li>
      <li class="product">
         <a href="#" class="exp inactive">
            <span>Giới thiệu</span>
            <strong>1</strong>
         </a>    
         <ul style="display: none;" class="sub">
            <li>
               <a href="<?php echo admin_url('introduce')?>">
                  Giới thiệu
               </a>
            </li>
         </ul> 
      </li>
      <li class="product">
         <a href="#" class="exp inactive">
            <span>Dịch vụ</span>
            <strong>1</strong>
         </a>
         <ul style="display: none;" class="sub">
            <li class="product">
               <a href="<?php echo admin_url('service')?>">
                  Dịch vụ
               </a>
            </li>
         </ul>
      </li>
      <li class="account">
         <a href="" class="exp inactive">
            <span>Tài khoản</span>
            <strong>1</strong>
         </a>
         <ul style="display: none;" class="sub">
            <li>
               <a href="<?php echo admin_url('admin')?>">
                  Ban quản trị
               </a>
            </li>
            <!-- <li>
               <a href="<?php echo admin_url('user')?>">
                Thành viên </a>
             </li> -->
          </ul>
       </li>
       <li class="support">
         <a href="" class="exp inactive">
            <span>Hỗ trợ và liên hệ</span>
            <strong>3</strong>
         </a>
         <ul style="display: none;" class="sub">
            <li>
               <a href="<?php echo admin_url('support')?>">
               Hỗ trợ </a>
            </li>
            <li>
               <a href="<?php echo admin_url('storeaddress')?>">
               Địa chỉ chi nhánh </a>
            </li>
            <li>
               <a href="<?php echo admin_url('contact')?>">
               Liên hệ </a>
            </li>
         </ul>
      </li>
      <li class="content">
         <a href="" class="exp inactive">
            <span>Nội dung</span>
            <strong>1</strong>
         </a>
         <ul style="display: none;" class="sub">

            <li>
               <a href="<?php echo admin_url('slide')?>">
                  Slide
               </a>
            </li>
            <!-- <li>
               <a href="<?php echo admin_url('news')?>">
                  Tin tức
               </a>
            </li> -->
            
         </ul>
      </li>
   </ul>
</div>
<div class="clear"></div>