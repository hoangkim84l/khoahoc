<div class="page-in">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pull-left">
        <div class="page-in-name"><span>Có <?php echo $total_rows?> sản phẩm</span></div>
      </div>
      <div class="col-lg-6 pull-right">
        <div class="page-in-bread"><span>Bạn đang ở đây:</span> <a href="<?php echo base_url()?>">Trang chủ</a> \ Danh mục</div>
      </div>
    </div>
  </div>
</div>
<div id="sideLeft" class="col-lg-3 border col-sm-12col-md-3">
    <ul id="menuTree">
        <li>
            <strong><a href="#" onfocus="blurLink(this);" class="currents">Danh mục sản phẩm</a></strong>
            <ul>
                <?php foreach ($catalog_list as $row):?>
               <li>
                 <a href="<?php echo base_url('san-pham/danh-muc/'.$row->id)?>"  onfocus="blurLink(this);" title="<?php echo $row->name?>"><?php echo $row->name?></a>
                 <?php if(!empty($row->subs)):?>
                 <!-- lay danh sach danh muc con -->
                 <ul class="catalog-sub">  
                        <?php foreach ($row->subs as $sub):?>                                           
                        <li>
                            <a href="<?php echo base_url('san-pham/danh-muc/'.$sub->id)?>"  onfocus="blurLink(this);" title="<?php echo $sub->name?>"> 
                            <?php echo $sub->name?></a>
                        </li>
                        <?php endforeach;?>                                     
                 </ul>
                 <?php endif;?>
              </li>
              <?php endforeach;?>  
            </ul>
            <span></span>
        </li>
        <li>
            <strong><a href="#" onfocus="blurLink(this);">Tư vấn</a></strong>
            <ul>
                <li><a href="<?php echo base_url()?>dich-vu.html" onfocus="blurLink(this);">Dịch vụ</a></li>
                <li><a href="<?php echo base_url()?>lien-he.html" onfocus="blurLink(this);">Liên hệ</a></li>
            </ul>
            <span></span></li>
    </ul>
    <span></span>
</div>
<div id="mainContent" class="col-sm-12 col-lg-4 col-md-4">
  <div id="mainBanner_twoColumn">
  </div>
  <div id="mainCon_bottom" class="border mb">
    <div class="product">
      <a id="c648"></a>
      <div id="c78" class="csc-default">
        <!-- <div class="tx-fetextimage-pi3">
          <h1><img title="Products" alt="Products" src="fileadmin/textimage/Headline_Blue_19px/068f80c7519d0528fb08e82137a72131.png"  /></h1>
        </div> -->
      </div>
      <a id="c1774"></a>
      <?php foreach($list as $row):?>
        <div id="c79" class="csc-default">
          <div class="csc-textpic csc-textpic-center csc-textpic-above">
            <div class="csc-textpic-imagewrap csc-textpic-single-image" style="width:278px;">
              <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" width="320" height="210" alt="<?php echo $row->name?>" style="float: left;" /></div>
              <div class="csc-textpic-text">
                <p class="bodytext"><span style="font-weight: bold;"></span>
                </p>
                <h4 class="custom-title"><?php echo $row->name?></h4>
                <div class="bodytext custom-content"><?php echo $row->content?>...</div>
                <p class="bodytext"><a href="<?=site_url('san-pham/chi-tiet/'.$row->slug_name.'-'.$row->id)?>" title="<?php echo $row->name?>" class="internal-link">Xem thêm</a></p>
              </div>
            </div>
            <div class="csc-textpic-clear">
            </div>
          </div>
          <hr/ style="width:200px;">
        <?php endforeach;?>
      </div>
    </div>
  </div>
  <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12">
    <div id="seite" class="border mb">
      <div class="tx-extrecommend-pi1">

        <script type="text/javascript" src="typo3conf/ext/ext_recommend/res/js/recommend.js"></script>
        <a id="email" href="" class="thickbox">Seite empfehlen</a> | <a id="print" href="javascript:window.print();">Seite drucken</a>

      </div>
    </div>
    <div id="rightBot">
      <div id="c273" class="csc-default">
        <a id="c2623"></a>
        <div id="c2624" class="csc-default">
          <div class="tx-extteaserbox-pi1">

            <div class="text">
              <h2><?php echo $supports->name?></h2>
              <p class="bodytext">
                <ul class="contact-footer" style="text-align: left;list-style: none;">
                 <li><i class="icon-location"></i> Địa chỉ : <?php echo $supports->address?></li>
                 <li><i class="icon-mobile"></i> Điện thoại : <a href="tel:<?php echo $supports->phone?>"><?php echo $supports->phone?></a></li>
                 <li><i class="icon-inbox"></i> Hotline : <a href="tel:<?php echo $supports->hotline?>?>"><?php echo $supports->hotline?></a></li>
                 <li><i class="icon-videocam"></i> Zalo : <?php echo $supports->zalo?></li>
                 <li><i class="icon-mail"></i> E-mail: <a href="mailto:<?php echo $supports->gmail?>"><?php echo $supports->gmail?></a></li>
               </ul> 
             </div>

           </div>
         </div>
       </div>
     </div>
   </div>