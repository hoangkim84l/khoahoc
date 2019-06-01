<!-- head -->
<?php $this->load->view('admin/storeaddress/head', $this->data)?>

<div class="line"></div>

<div id="main_storeaddress" class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" name="titleCheck" id="titleCheck"></span>
			<h6>
				Danh sách chi nhánh
			</h6>
		 	<div class="num f12">Số lượng: <b><?php echo $total_rows?></b></div>
		</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			
			<thead class="filter"><tr><td colspan="8">
				<form method="get" action="<?php echo admin_url('storeaddress')?>" class="list_filter form">
					
				</form>
			</td></tr></thead>
			
			<thead>
				<tr>
					<td style="width:21px;"><img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png"></td>
					<td style="width:60px;">Mã số</td>
					<td>Số điện thoại</td>
					<td>Hotline</td>
					<td>Địa chỉ</td>
					<td style="width:75px;">Ngày tạo</td>
					<td style="width:120px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="8">
						 <div class="list_action itemActions">
								<a url="<?php echo admin_url('storeaddress/delete_all')?>" class="button blueB" id="submit" href="#submit">
									<span style="color:white;">Xóa hết</span>
								</a>
						 </div>
							
					     <div class="pagination">
					          <?php echo $this->pagination->create_links()?>
			             </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody class="list_item">
			     <?php foreach ($list as $row):?>
			     <tr class="row_<?php echo $row->id?>">
					<td><input type="checkbox" value="<?php echo $row->id?>" name="id[]"></td>
					<td class="textC"><?php echo $row->id?></td>
					<td>
						<a target="_blank" title="" class="tipS" href="">
						    <b><?php echo $row->phone?></b>
						</a>
					</td>
					<td>
						<?php echo $row->hotline?>
					</td>
					<td>
						<?php echo $row->address?>
					</td>
					<td class="textC"><?php echo get_date($row->created)?></td>
					
					<td class="option textC">
						<a class="tipS" title="Chỉnh sửa" href="<?php echo admin_url('storeaddress/edit/'.$row->id)?>">
							<img src="<?php echo public_url('admin/images')?>/icons/color/edit.png">
						</a>
						
						<a class="tipS verify_action" title="Xóa" href="<?php echo admin_url('storeaddress/del/'.$row->id)?>">
						    <img src="<?php echo public_url('admin/images')?>/icons/color/delete.png">
						</a>
					</td>
				</tr>
				<?php endforeach;?>
		   </tbody>
			
		</table>
	</div>
	
</div>


