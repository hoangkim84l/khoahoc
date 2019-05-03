<a id="c6283"></a>
<div id="c6282" class="csc-default">  
  <?php $this->load->view('site/slide')?> 
</div>  
<div class="row">
  <?php foreach($maxView as $row):?>
   <div class="col-lg-4 col-xs-6 col-md-4 col-sm-4">
     <a href="<?=site_url('san-pham/chi-tiet/'.$row->slug_name.'-'.$row->id)?>" title="<?php echo $row->name?>" class="internal-link">
    
      <div class="panel panel-default">
        <div class="panel-body config-image-background" style="background-image:url(<?php echo base_url('upload/product/'.$row->image_link)?>);">
          <!-- <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" class="img-responsive" style="display:inline-block;max-height:100%;max-width:100%" alt="<?=$row->name?>"> -->
          </div>
        <div class="panel-footer"><?=$row->name?></div>
      </div>
      </a>
    </div>
  <?php endforeach;?>
  </div>  
<br>