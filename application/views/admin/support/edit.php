
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
				<!-- <?php $mode_address = json_decode($info->more_address);$mode_address=array_filter($mode_address);?> -->
				<div class="formRow">
					<label class="formLeft" for="param_sort_order">Địa chỉ cơ sở chính :</label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="address" id="param_sort_order"  class="left" value='<?php echo $info->address?>'  type="text" />
						</span>
					<!-- 	<a href="javascript:void(0);" class="add_input_button" title="Click để thêm địa chỉ chi nhánh">
							<img style="height: 32px; width: 32px; margin-left: 10px;" src="<?php echo public_url('admin'); ?>/images/add-icon.png"/>
						</a> -->
							
						<span name="sort_order_autocheck" class="autocheck"></span>
						<div name="sort_order_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<!-- <div class="formRow">
					<label class="formLeft" for="param_sort_order">Thêm địa chỉ :</label>
					<div class="field_wrappers">
						
					</div>
					
					<div class="clear"></div>
				</div> -->

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
                <!-- <div class="formRow">
                     <label class="formLeft">Banner:</label>
                     <div class="formRight">
                        <div class="left">
                           <input type="file" name="banner" id="banner" size="25">
                           <img src="<?php echo base_url('upload/logo/'.$info->banner)?>" style="width:100px;height:70px">
                        </div>
                        <div class="clear error" name="image_error"></div>
                     </div>
                     <div class="clear"></div>
                  </div> -->  
                <div class="formRow">
                     <label class="formLeft">Chat Facebook:<br/>
                     	<a href="<?php echo public_url('admin'); ?>/document/Tích hợp chat facebook vào website.docx" target="blank" style="color: red">Hướng dẩn tích hợp chat Facebook</a>
                     </label>
                     <div class="formRight">
                           <textarea style="height: 300px" id="chat_facebook" name="chat_facebook" placeholder="Copy và dán mã tạo chat facebook messenger vào đây"><?php echo $info->chat_facebook?></textarea>
                      
                        <div class="clear error" name="image_error"></div>
                     </div>
                     <div class="clear"></div>
                </div>
                <div class="formRow">
                     <label class="formLeft">Chat Zalo:<br/>
                     	<a href="<?php echo public_url('admin'); ?>/document/Thêm chat Zalo vào website.docx" target="blank" style="color: red">Hướng dẩn tích hợp chat Zalo</a>
                     </label>
                     <div class="formRight">
                           <textarea style="height: 300px" id="chat_zalo" name="chat_zalo" placeholder="Copy và dán mã tạo chat zalo vào đây"><?php echo $info->chat_zalo?></textarea>
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

<script>

$(document).ready(function(){
var max_fields = 10;
var add_input_button = $('.add_input_button');
var field_wrapper = $('.field_wrappers');
var new_field_html = '<div class="formRight" style="margin-top: 10px;"><span class="oneTwo"><input name="more_address[]" id="param_sort_order"  class="left" value=""  type="text" /><br/></span><a href="javascript:void(0);" class="remove_input_button" title="Remove field"><button style="margin-left:10px">XÓA!</button></a></div>';
var input_count = 1;
// Add button dynamically
$(add_input_button).click(function(){
	if(input_count < max_fields){
		input_count++;
	$(field_wrapper).append(new_field_html);
	}
});
// Remove dynamically added button
$(field_wrapper).on('click', '.remove_input_button', function(e){
		e.preventDefault();
	$(this).parent('div').remove();
		input_count--;
	});
});

</script>	