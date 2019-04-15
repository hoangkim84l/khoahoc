<div class="page-in">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pull-left">
        <div class="page-in-name"><span>có tổng cộng (<?php echo $total_rows ?>) sản phẩm</span></div>
      </div>
      <div class="col-lg-6 pull-right">
        <div class="page-in-bread"><span>Bạn đang ở đây:</span> <a href="<?php echo base_url()?>">Trang chủ</a> \ Sản phẩm</div>
      </div>
    </div>
  </div>
</div>
<div id="mainCon" class="col-sm-12 col-lg-6 col-md-6">
  <div id="mainBanner_twoColumn">
  </div>
  <div id="mainCon_bottom" class="border mb">
    <div class="product">
      <a id="c648"></a>
      <div id="c78" class="csc-default">
        <div class="tx-fetextimage-pi3">
          <h1><img title="Products" alt="Products" src="fileadmin/textimage/Headline_Blue_19px/068f80c7519d0528fb08e82137a72131.png"  /></h1>
        </div>
      </div>
      <a id="c1774"></a>
      <?php foreach($list as $row):?>
        <div id="c79" class="csc-default">
          <div class="csc-textpic csc-textpic-center csc-textpic-above">
            <div class="csc-textpic-imagewrap csc-textpic-single-image" style="width:278px;">
              <img src="uploads/pics/_Eingangsbild_Labor_01.jpg" width="278" height="81" alt="" style="float: left;" /></div>
              <div class="csc-textpic-text">
                <p class="bodytext"><span style="font-weight: bold;"></span>
                </p>
                <h4><?php echo $row->name?></h4>
                <p class="bodytext">At home in the laboratories of the world for decades.
                </p>
                <p class="bodytext"><a href="en/products-solutions/laboratory-glassware.html" title="Laborglas" class="internal-link">Learn more</a></p>
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
  <div id="sidebar" class="col-lg-5 col-md-5 col-sm-12">
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