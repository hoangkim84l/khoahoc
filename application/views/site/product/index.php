
<div class="page-in">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pull-left"><div class="page-in-name">Sản phẩm: </div></div>
      <div class="col-lg-6 pull-right"><div class="page-in-bread"><span>Bạn đang ở đây:</span> <a href="<?php echo base_url()?>">Trang chủ</a> \ Sản phẩm</div></div>
    </div>
  </div>
</div>
<div id="main" class="mb">
    <div id="sideLeft" class="col-lg-3 col-sm-12 col-md-3 border">
        <ul id="menuTree">
            <li><strong class="collapsible">Sản phẩm</strong>
                <ul class="content">
                    <li><a href="<?=site_url('san-pham-moi-nhat.html')?>" onfocus="blurLink(this);">Sản phẩm mới</a></li>
                    <li><a href="<?=site_url('san-pham-xem-nhieu-nhat.html')?>" onfocus="blurLink(this);">Sản phẩm xem nhiều nhất</a></li>
                </ul><span></span></li>
            <li><strong class="collapsible">Danh mục sản phẩm</strong>
              <ul class="content">
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
            </li>
            <li><strong class="collapsible">Tư vấn</strong>
                <ul class="content">
                    <li><a href="<?php echo base_url()?>dich-vu.html" onfocus="blurLink(this);">Dịch vụ</a></li>
                    <li><a href="<?php echo base_url()?>lien-he.html" onfocus="blurLink(this);">Liên hệ</a></li>
                </ul>
                <span></span>
              </li>
        </ul>
        <span></span>
    </div>
    <div id="mainContent" class="col-sm-12 col-lg-4 col-md-4 border">
        <div id="bcn">
            <ul>
                <li><a onfocus="blurLink(this);">Trang chủ</a>&nbsp;»&nbsp;</li>
                <li><a href="<?=site_url('san-pham.html')?>" onfocus="blurLink(this);">Sản phẩm</a></li>
            </ul>
        </div>
        <div id="textlist">
            <a id="c1657"></a>
            <?php foreach($list as $row):?>
            <div id="c79" class="csc-default">
              <div class="csc-textpic csc-textpic-center csc-textpic-above">
                <div class="csc-textpic-imagewrap csc-textpic-single-image" style="width:340px;">
                  <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" class="img-rounded" width="304" height="236" style="margin: 0 auto;" alt="<?php echo $row->name?>" /></div>
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
        <div id="sidebox">
          <a id="c4085"></a>
            
            <div id="c5334" class="csc-default">
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
            <div id="c5336" class="csc-default">
              <div class="tx-extcontactbox-pi1">

                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>    