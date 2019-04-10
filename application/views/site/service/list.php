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
    <?php if(empty($list)):?>
      <h2 style='text-align:center'>Chưa có bài viết nào</h2>
    <?php else:?>
    <?php $i=1; foreach($list as $project):?>
     <div class="project-item ani-text">
        <span class="project-bg"></span>
        <div class="project-title">
           <span>Khu dự án</span>
           <h3><strong><?php echo $project->title;?></strong></h3>
           <span class="project-num"><?php echo $i++; ?></span>
        </div>
        <div class="project-box">
           <div class="project-pic">
              <div class="bg-cover"><img src="<?php echo base_url('upload/project/'.$project->image_link)?>" alt="<?php echo $project->meta_key;?>"></div>
           </div>
           <div class="project-text">
              <p><?php echo $project->meta_desc;?>.</p>
           </div>
           <div class="project-but"><a href="<?=site_url('du-an/chi-tiet/'.$project->slug_title.'-'.$project->id)?>"><span></span>Xem Chi Tiết</a></div>
        </div>
     </div>
    <?php endforeach;?> 
    <?php endif;?>  
    <div class='pagination'>
            <?php echo $this->pagination->create_links();?>
    </div>  
</section>
<!--CONTENT-->