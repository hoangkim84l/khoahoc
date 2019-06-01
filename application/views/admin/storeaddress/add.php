<!-- head -->
<?php $this->load->view('admin/storeaddress/head', $this->data)?>
<div class="line"></div>
<div class="wrapper">
   <!-- Form -->
   <form enctype="multipart/form-data" method="post" action="<?php echo admin_url('storeaddress/add')?>" id="form" class="form">
      <fieldset>
         <div class="widget">
            <div class="title">
               <img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
               <h6>Thêm mới chi nhánh</h6>
            </div>
            <ul class="tabs">
               <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
            </ul>
            <div class="tab_container">
               <div class="tab_content pd0" id="tab1" style="display: block;">
                  <div class="formRow">
                     <label for="param_name" class="formLeft">Số điện thoại:</label>
                     <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_phone" name="phone"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"></div>
                     </div>
                     <div class="clear"></div>
                  </div>
                  <div class="formRow">
                     <label for="param_name" class="formLeft">Hotline</label>
                     <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_hotline" name="hotline"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"></div>
                     </div>
                     <div class="clear"></div>
                  </div>

                  <div class="formRow">
                     <label for="param_name" class="formLeft">Địa chỉ <span class="req">*</span></label>
                     <div class="formRight">
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_address" name="address"></span>
                        <span class="autocheck" name="name_autocheck"></span>
                        <div class="clear error" name="name_error"></div>
                     </div>
                     <div class="clear"></div>
                  </div>

                  <div class="clear"></div>
               </div>
               <div class="formRow hide"></div>
            </div>
           
         </div>
         <!-- End tab_container-->
         <div class="formSubmit">
            <input type="submit" class="redB" value="Thêm mới">
            <input type="reset" class="basic" value="Hủy bỏ">
         </div>
         <div class="clear"></div>
      </div>
   </fieldset>
</form>
</div>
<div class="clear mt30"></div>