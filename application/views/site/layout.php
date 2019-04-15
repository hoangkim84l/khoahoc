<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php $this->load->view('site/head');?>
</head>
<body>
	<div class="dwkheader">
        <a href="/en/dwklifesciences.html" class="dwkheader_link">
            <img src="/fileadmin/templates/images/dwk_top-banner_ccc_en.png" class="dwkheader_img"/>
        </a>
    </div>
	<div id="layout">		
		<header>
			<?php $this->load->view('site/header')?>
		</header>	
		<div id="navigation" class="mb">
			<?php $this->load->view('site/addthis')?>
		</div>
		<div id="main" class="mb">
			<?php if(isset($message)):?>
				<h3 style="color:red"><?php echo $message?></h3>
			<?php endif;?>
			<?php $this->load->view($temp , $this->data);?>
			<div class="clear"></div>
		</div>	
		<div id="footer">
			<?php $this->load->view('site/footer');?>
		</div> 
	</div>    
</body>
<script type="text/javascript">
		if(window.location.pathname === "/dich-vu.html"){
			$(".service").addClass("current");
		}
		if(window.location.pathname === "/thong-tin-ve-chung-toi.html"){
			$(".introduce").addClass("current");
		}
		if(window.location.pathname === "/bai-viet-hay.html"){
			$(".news").addClass("current");
		}
		if(window.location.pathname === "/lien-he.html"){
			$(".contact").addClass("current");
		}
		if(window.location.pathname === "/san-pham.html"){
			$(".product").addClass("current");
		}
		if(window.location.pathname === "/"){
			$(".homepage").addClass("current");
		}
		var pathArray = window.location.pathname.split('/');
		var secondLevelLocation = pathArray[1];
		if(secondLevelLocation === "bai-viet"){
			$(".news").addClass("current");
		}
		if(secondLevelLocation === "san-pham"){
			$(".product").addClass("current");
		}
	</script>
</html>