<a id="c6283"></a>
<div id="c6282" class="csc-default">  
  <?php $this->load->view('site/slide')?> 
</div>  
  <?php foreach($maxView as $row):?>
    <a href="<?=site_url('san-pham/chi-tiet/'.$row->slug_name.'-'.$row->id)?>" title="<?php echo $row->name?>" class="internal-link">
    <div class="col-lg-4 col-sm-6 col-md-4">
      <div class="panel panel-default">
        <div class="panel-body" style="width:100%;height:210px;overflow:hidden;text-align:center;background-size:cover;background-image:url(<?php echo base_url('upload/product/'.$row->image_link)?>);">
          <!-- <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" class="img-responsive" style="display:inline-block;max-height:100%;max-width:100%" alt="<?=$row->name?>"> -->
          </div>
        <div class="panel-footer"><?=$row->name?></div>
      </div>
    </div>
  </a>
  <?php endforeach;?>  
<br>