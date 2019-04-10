<!--SLIDER-->
<div class="slider-home" data-time="3000">
   <div class="title-page">
      <h1>Dự án</h1>
      <h3><?php echo $info->title?></h3>
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
   <?php echo $info->content?>
</section>
<!--details-->
<section class="project-group">
   <div class="title">
      <h2>Các dự án khác</h2>
   </div>
   <div class="group-box center-no-paging blue">
      <div class="group-slider">
        <?php foreach($maxView as $view):?> 
         <div class="group-item">
            <div class="group-pic"><img src="<?php echo base_url('upload/project/'.$view->image_link)?>" alt="<?php echo $view->meta_desc;?>"></div>
            <div class="group-text">
               <h3><?php echo $view->title;?></h3>
            </div>
            <a href="<?=site_url('du-an/chi-tiet/'.$view->slug_title.'-'.$view->id)?>" class="go-project" ></a>
         </div>
        <?php endforeach;?> 
      </div>
   </div>
</section>
<!--CONTENT-->