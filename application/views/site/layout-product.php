<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php $this->load->view('site/head');?>
	<?php header('Access-Control-Allow-Origin: *'); ?>
	<?php header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); ?>
	<?php header('Access-Control-Allow-Origin: https://thuytinhhoangson.com'); ?>
</head>
<body>
	<div id="layout">		
		<?php $this->load->view('site/addthis')?>
		<div id="main" class="mb">
			<div id="product-container">		
				<?php $this->load->view('site/left');?>	
				<?php $this->load->view($temp , $this->data);?>
				<?php $this->load->view('site/right');?>
			</div>
			<div class="chat-facebook"><?php echo $supports->chat_facebook?></div>
			<div class="chat-zalo"><?php echo $supports->chat_zalo?></div>
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
	<script>

  function PreloadImage(container){
      var imgUrl = container.getAttribute("data-preload-image-url");
      var fakeImage = new Image();
      fakeImage.onload = function(a){
        console.log(fakeImage.src + " success");
        container.appendChild(fakeImage);
        container.setAttribute("data-preload-status","");
      }

      fakeImage.onerror  = function(){
        console.log(fakeImage.src + " fail");
        container.setAttribute("data-preload-status","2")
      }

      fakeImage.src  = imgUrl;
   
  }

  function PreparePreloadImage(){
    var listContainerImages = document.querySelectorAll("*[data-preload-image-url]");
    for(var i = 0; i < listContainerImages.length;i++){
      PreloadImage(listContainerImages[i]);
    }
  }


  PreparePreloadImage();
</script>
</html>