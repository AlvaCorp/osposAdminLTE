<div class="modal-dialog" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-content">
		<div class="modal-header">
			<strong><?php echo $this->lang->line("sales_suspended_sales"); ?></strong>
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>
		<div class="modal-body" >
		
			<table id="suspended_sales_table" class="table table-bordered table-striped table-condensed">
				<thead>
					<tr class="danger">
						<th><?php echo $this->lang->line('sales_suspended_sale_id'); ?></th>
						<th><?php echo $this->lang->line('sales_date'); ?></th>
						<th><?php echo $this->lang->line('sales_customer'); ?></th>
						<th><?php echo $this->lang->line('sales_comments'); ?></th>
						<th><?php echo $this->lang->line('sales_unsuspend_and_delete'); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach ($suspended_sales as $suspended_sale)
				{
				?>
					<tr>
						<td><?php echo $suspended_sale['sale_id'];?></td>
						<td><?php echo date($this->config->item('dateformat'),strtotime($suspended_sale['sale_time']));?></td>
						<td>
							<?php
							if (isset($suspended_sale['customer_id']))
							{
								$customer = $this->Customer->get_info($suspended_sale['customer_id']);
								echo $customer->first_name. ' '. $customer->last_name;
							}
							else
							{
							?>
								&nbsp;
							<?php
							}
							?>
						</td>
						<td><?php echo $suspended_sale['comment'];?></td>
						<td>
							<?php 
							echo form_open('sales/unsuspend');
							echo form_hidden('suspended_sale_id', $suspended_sale['sale_id']);
							?>
								<input type="submit" name="submit" value="<?php echo $this->lang->line('sales_unsuspend'); ?>" id="submit" class="btn btn-primary btn-xs pull-right"></td>
							<?php
							echo form_close();
							?>
					</tr>
				<?php
				}
				
				?>
				</tbody>
			</table>
			
		</div>
	</div>
</div>