<div class="page-in">
 <div class="container">
  <div class="row">
   <div class="col-lg-6 pull-left"><div class="page-in-bread"><span><h3>Dịch vụ</h3></span> </div></div>
   <div class="col-lg-6 pull-right"><div class="page-in-bread"><span>Bạn đang ở đây:</span> <a href="<?php echo base_url()?>">Trang chủ</a> \ Dịch vụ</div></div>
 </div>
</div>
</div><br/>
<div id="main" class="mb">
    <div id="mainCon" class="col-lg-8 col-sm-12 col-md-8 text-left">
        <div id="mainBanner_twoColumn">
        </div>
        <div id="mainCon_bottom" class="border mb">
            <a id="c6280"></a>
            <div id="c6216" class="csc-default">
                <div class="tx-fetextimage-pi3">
                    <h4><?=$info->title?></h4>
                </div>
            </div>
            <a id="c6215"></a>
            <div id="c6214" class="csc-default">
                <?=$info->content?>
            </div>
        </div>
    </div>
    <div id="sidebar" class="col-lg-4 col-sm-12 col-md-4">
        <div id="seite" class="border mb">
            <div class="tx-extrecommend-pi1">
                <script type="text/javascript" src="typo3conf/ext/ext_recommend/res/js/recommend.js"></script>

                <a id="email" href="" class="thickbox">Seite empfehlen</a> | <a id="print" href="javascript:window.print();">Seite drucken</a>

            </div>
        </div>
        <div id="rightBot">
            <div id="c6209" class="csc-default">
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
    <div class="clear"></div>
</div>