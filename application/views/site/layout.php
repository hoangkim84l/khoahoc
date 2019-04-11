<!DOCTYPE html>
<html  lang="en" class="no-js">
<head>
	<?php $this->load->view('site/head');?>
</head>
<body>
	<div class="wrapper cus-container-color">		
		<header>
			<?php $this->load->view('site/header')?>
		</header>	
		<div class="page_head">
			<?php $this->load->view('site/addthis')?>
		</div> 
		<?php if(isset($message)):?>
			<h3 style="color:red"><?php echo $message?></h3>
		<?php endif;?>
		<?php $this->load->view($temp , $this->data);?>
		<div class="clear"></div>
			
		<div class="footer" style="margin-top:0px;">
			<?php $this->load->view('site/footer');?>
		</div> 
	</div>
	<script type="text/javascript" src="<?php echo public_url()?>site/assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/sticky.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/retina.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/testimonialrotator.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/portfolio-main.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/jcarousel.responsive.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/jquery.dlmenu.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/tweetie.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="<?php echo public_url()?>site/assets/js/main.js"></script>	       
</body>
</html>