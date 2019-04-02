<div class="top"><span></span></div>
<!--logo-->
<div class="logo">
   <div class="logo-company vi"></div>
   <div class="slogan-top vi"></div>
</div>
<!--logo <?php echo $supports->phone?>-->
<!--SEARCH-->
<a href="javascript:void(0);" class="search"><span></span></a>
<div class="search-form">
   <div class="form-row-search">
      <form action="<?php echo site_url('project/search')?>" id="search" method="get">
         <input autocomplete="off" id="qsearch" type="text" class="search-field" data-holder="Tìm kiếm..." value="<?php echo isset($key) ? $key : ''?>" name="key-search" data-default="Tìm kiếm..."  />
      </form>
   </div>
</div>
<!--SEARCH-->
<!-- <div class="language">
   <form id="change_lang" enctype="multipart/form-data" method="post" action="http://www.diaoctrananh.com/index.php?route=common/home">
      <a href="javascript:void(0);" onClick="$('input[name=\'language_code\']').attr('value', 'en').submit();$('input[name=\'redirect\']').attr('value', 'http://www.diaoctrananh.com/en/').submit();$('#change_lang').submit();return false;">en</a>
      <input type="hidden" value="" name="language_code" />
      <input id="changlanguage_redirect" type="hidden" value="http://www.diaoctrananh.com/" name="redirect" />
   </form>
</div> -->
<!--menu-->
<nav>
   <div class="navigation">
      <div class="nav">
         <ul>
            <li class="current"  data-page="home-page"><a class="link-home" href="<?php echo site_url();?>" data-name="95" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group">Trang chủ</a></li>
            <li   data-page="projects-page"><a class="link-load" href="<?php echo site_url();?>du-an.html" data-name="93" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group">Dự án</a></li>
            <li   data-page="about-page"><a class="link-load" href="<?php echo site_url();?>thong-tin-ve-chung-toi.html" data-name="96" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group">Giới thiệu</a></li>
            <li   data-page="members-page"><a class="link-load" href="<?php echo site_url();?>cong-ty-thanh-vien.html" data-name="164" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group">Đối tác</a></li>
            <li   data-page="trading-floor-page"><a class="link-load" href="<?php echo site_url();?>san-giao-dich.html" data-name="291" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group">Sàn giao dịch</a></li>
         </ul>
         <ul>
            <li   data-page="orientate-page"><a class="link-load" href="<?php echo site_url();?>dinh-huong-phat-trien.html" data-name="269" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group">Định hướng phát triển</a></li>
            <li   data-page="career-page"><a class="link-load" href="<?php echo site_url();?>tuyen-dung.html" data-name="295" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group">Cơ hội nghề nghiệp</a></li>
            <li   data-page="news-page"><a class="link-load" href="<?php echo site_url();?>bai-viet-hay.html" data-name="94" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group">Tin tức</a></li>
            <li   data-page="contact-page"><a class="link-load" href="<?php echo site_url();?>lien-he.html" data-name="92" data-title="Trần Anh Group" data-description="Trần Anh Group" data-keyword="Trần Anh Group">Liên hệ</a></li>
         </ul>
      </div>
   </div>
</nav>
<!--menu-->
<div class="nav-overlay"></div>
<div class="nav-but"></div>