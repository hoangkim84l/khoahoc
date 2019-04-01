<div class="hero-slides owl-carousel">
	<?php foreach($slide_list as $slide_lists):?>	
		<div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?php echo base_url('upload/slide/'.$slide_lists->image_link)?>);"></div>
    <?php endforeach;?>
</div>