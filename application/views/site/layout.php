<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php $this->load->view('site/head');?>
	<?php header('Access-Control-Allow-Origin: *'); ?>
	<?php header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); ?>
	<?php header('Access-Control-Allow-Origin: https://thuytinhhoangson.com'); ?>
</head>
<body>
	<!-- <div class="dwkheader">
        <a href="#" class="dwkheader_link">
            <img src="<?php echo base_url('upload/logo/'.$supports->banner)?>" class="dwkheader_img"/>
        </a>
    </div> -->
	<div id="layout">		
		<!-- <header>
			<?php $this->load->view('site/header')?>
		</header>	 -->
		<?php $this->load->view('site/addthis')?>
		
		<div id="main" class="mb">
			<?php if(isset($message)):?>
				<h3 style="color:red"><?php echo $message?></h3>
			<?php endif;?>
			<?php $this->load->view($temp , $this->data);?>
			<div class="chat-facebook"><?php echo $supports->chat_facebook?></div>
			<div class="chat-zalo"><?php echo $supports->chat_zalo?></div>
			<!-- <div class="call-now">
				<a id="calltrap-btn" class="b-calltrap-btn calltrap_offline hidden-phone visible-tablet" href="tel:<?php echo $supports->hotline?>">
			 		<div id="calltrap-ico" style=""></div>
			 	</a>
			</div> -->
			<div class="clear"></div>
		</div>	
		<footer id="footer">
			<?php $this->load->view('site/footer');?>
		</footer> 
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
		if(secondLevelLocation === "dich-vu"){
			$(".service").addClass("current");
		}
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
	</script>
</html>