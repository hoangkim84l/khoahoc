<a id="c6283"></a>
<div id="c6282" class="csc-default">  
  <?php $this->load->view('site/slide')?> 
</div>  
  <?php foreach($maxView as $row):?>
    <div class="col-lg-6 col-sm-12 col-md-6">
      <div class="panel panel-default">
        <!-- <div class="panel-heading">BLACK FRIDAY DEAL</div> -->
        <div class="panel-body"><img src="<?php echo base_url('upload/product/'.$row->image_link)?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><?=$row->name?></div>
      </div>
    </div>
  <?php endforeach;?>  
<br>