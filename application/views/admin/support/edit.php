
<?php $this->load->view('admin/support/_common'); ?>

<!-- Main content wrapper -->
<div class="wrapper">

   	<!-- Form -->
	<form class="form" id="form" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="widget">
				<div class="title">
					<img src="<?php echo public_url('admin'); ?>/images/icons/dark/add.png" class="titleIcon" />
					<h6><?php echo lang('edit'); ?> cấu hình hệ thống</h6>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_name"><?php echo lang('name'); ?>:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="name" id="param_name" value='<?php echo $info->name?>' _autocheck="true" type="text" /></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_phone"><?php echo lang('phone'); ?>:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="phone" id="param_phone" value='<?php echo $info->phone?>'  _autocheck="true" type="text" /></span>
						<span name="phone_autocheck" class="autocheck"></span>
						<div name="phone_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_facebook">Facebook:</label>
					<div class="formRight">
						<span class="oneTwo"><input name="facebook" id="param_facebook" value='<?php echo $info->facebook?>'  type="text" /></span>
						<span name="facebook_autocheck" class="autocheck"></span>
						<div name="facebook_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_gmail"><?php echo lang('email'); ?>:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="gmail" id="param_gmail" value='<?php echo $info->gmail?>'  type="text" /></span>
						<span name="gmail_autocheck" class="autocheck"></span>
						<div name="gmail_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_skype">Zalo:</label>
					<div class="formRight">
						<span class="oneTwo"><input name="zalo" id="param_skype" value='<?php echo $info->zalo?>'  type="text" /></span>
						<span name="skype_autocheck" class="autocheck"></span>
						<div name="skype_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_sort_order">Hotline :</label>
					<div class="formRight">
						<span class="oneTwo"><input name="hotline" id="param_sort_order" value='<?php echo $info->hotline?>'  type="text" /></span>
						<span name="sort_order_autocheck" class="autocheck"></span>
						<div name="sort_order_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_sort_order">Địa chỉ :</label>
					<div class="formRight">
						<span class="oneTwo"><input name="address" id="param_sort_order"  class="left" value='<?php echo $info->address?>'  type="text" /></span>
						<span name="sort_order_autocheck" class="autocheck"></span>
						<div name="sort_order_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_sort_order">Meta key :</label>
					<div class="formRight">
						<textarea name="meta_key"><?php echo $info->meta_key?></textarea>
						<span name="sort_order_autocheck" class="autocheck"></span>
						<div name="sort_order_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_sort_order">Meta description :</label>
					<div class="formRight">
						<textarea name="meta_desc"><?php echo $info->meta_desc?></textarea>
						<span name="sort_order_autocheck" class="autocheck"></span>
						<div name="sort_order_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
                     <label class="formLeft">Logo:</label>
                     <div class="formRight">
                        <div class="left">
                           <input type="file" name="image" id="image" size="25">
                           <img src="<?php echo base_url('upload/logo/'.$info->image_link)?>" style="width:100px;height:70px">
                        </div>
                        <div class="clear error" name="image_error"></div>
                     </div>
                     <div class="clear"></div>
                  </div>
                <div class="formRow">
                     <label class="formLeft">Banner:</label>
                     <div class="formRight">
                        <div class="left">
                           <input type="file" name="banner" id="banner" size="25">
                           <img src="<?php echo base_url('upload/logo/'.$info->banner)?>" style="width:100px;height:70px">
                        </div>
                        <div class="clear error" name="image_error"></div>
                     </div>
                     <div class="clear"></div>
                  </div>  
           		<div class="formSubmit">
           			<input type="submit" value="<?php echo lang('button_update'); ?>" class="redB" />
           			<input type="reset" value="<?php echo lang('button_reset'); ?>" class="basic" />
           		</div>
        		<div class="clear"></div>
        		
			</div>
		</fieldset>
	</form>
	
</div>
