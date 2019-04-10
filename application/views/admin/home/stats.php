
<!-- User -->
<div class="oneTwo">
	<div class="widget">
		<div class="title">
			<img src="<?php echo public_url('admin'); ?>/images/icons/dark/users.png" class="titleIcon" />
			<h6>Thống kê dữ liệu</h6>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable myTable">
			<tbody>
				
				<tr>
					<td>
						<div class="left">Tổng số sản phẩm</div>
						<div class="right f11"><a href="<?php echo admin_url('product')?>"><?php echo lang("detail"); ?></a></div>
					</td>
					
					<td class="textC webStatsLink">
						<?php echo number_format($total_product)?>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="left">Tổng số dịch vụ</div>
						<div class="right f11"><a href="<?php echo admin_url('service')?>"><?php echo lang("detail"); ?></a></div>
					</td>
					
					<td class="textC webStatsLink">
						<?php echo number_format($total_service)?>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="left">Tổng số bài viết</div>
						<div class="right f11"><a href="<?php echo admin_url('news')?>"><?php echo lang("detail"); ?></a></div>
					</td>
					
					<td class="textC webStatsLink">
						<?php echo number_format($total_news)?>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="left">Tổng số liên hệ</div>
						<div class="right f11"><a href="<?php echo admin_url('contact')?>"><?php echo lang("detail"); ?></a></div>
					</td>
					
					<td class="textC webStatsLink">
						<?php echo number_format($total_contact)?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

