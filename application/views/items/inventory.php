<div class="modal-dialog" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-content">
		<div class="modal-header">
			<strong><?php echo $this->lang->line("items_count"); ?></strong>
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>
		<div class="modal-body" >
			<div id="required_fields_message"><?php echo $this->lang->line('common_fields_required_message'); ?></div>
			<ul id="error_message_box" class="error_message_box"></ul>

			<?php echo form_open('items/save_inventory/'.$item_info->item_id,array('id'=>'item_form')); ?>
				<fieldset id="item_basic_info">
					<legend><?php echo $this->lang->line("items_basic_information"); ?></legend>
					<table width="100%">					
					<tr>
					<td>	
					<?php echo form_label($this->lang->line('items_item_number').':', 'name',array('class'=>'control-label')); ?>
					</td>
					<td>
					<div class="form-group">
						<?php $inumber = array (
							'name'=>'item_number',
							'id'=>'item_number',
							'class'=>'form-control',
							'value'=>$item_info->item_number,
							'style'       => 'border:none',
							'readonly' => 'readonly'
						);
						
							echo form_input($inumber);
						?>
					</div>
					</td>
					</tr>
					<tr>
					<td>	
					<?php echo form_label($this->lang->line('items_name').':', 'name',array('class'=>'control-label')); ?>
					</td>
					<td>
					<div class="form-group">					
						<?php $iname = array (
							'name'=>'name',
							'id'=>'name',
							'class'=>'form-control',
							'value'=>$item_info->name,
							'style'       => 'border:none',
							'readonly' => 'readonly'
						);
							echo form_input($iname);
							?>
					</div>
					</td>
					</tr>
					<tr>
					<td>	
					<?php echo form_label($this->lang->line('items_category').':', 'category',array('class'=>'control-label')); ?>
					</td>
					<td>
					<div class="form-group">
						<?php $cat = array (
							
							'name'=>'category',
							'id'=>'category',
							'class'=>'form-control',
							'value'=>$item_info->category,
							'style'       => 'border:none',
							'readonly' => 'readonly'
							);
						
							echo form_input($cat);
							?>
					</div>
					</td>
					</tr>
					<tr>
					<td>
					<?php echo form_label($this->lang->line('items_stock_location').':', 'stock_location',array('class'=>'control-label')); ?>
					</td>
					<td>
					<div class="form-group">
						<?php 
								echo form_dropdown('stock_location',$stock_locations,current($stock_locations),'onchange="fill_quantity(this.value)" class="form-control"'); 
						?> 
					</div>
					</td>
					</tr>
					<tr>
					<td>
					<?php echo form_label($this->lang->line('items_current_quantity').':', 'quantity',array('class'=>'control-label')); ?>
					</td>
					<td>
					<div class="form-group">
						<?php $qty = array (
						
							'name'=>'quantity',
							'id'=>'quantity',
							'value'=>current($item_quantities),
							'style'       => 'border:none',
							'class'=>'form-control',
							'readonly' => 'readonly'
							);
						
							echo form_input($qty);
						?>
					</div>
					</td>
					</tr>
					</div>	
					<tr>
					<td>
					<?php echo form_label($this->lang->line('items_add_minus').':', 'quantity',array('class'=>'required control-label')); ?>
					</td>
					<td>
						<div class="form-group">	
						<?php echo form_input(array(
							'name'=>'newquantity',
							'class'=>'form-control',
							'id'=>'newquantity'
							)
						);?>
					</div>
					</td>
					</tr>
					<tr>
					<td>
					<?php echo form_label($this->lang->line('items_inventory_comments').':', 'description',array('class'=>'control-label')); ?>
					</td>
					<td>
					<div class="form-group">
						<?php echo form_textarea(array(
							'name'=>'trans_comment',
							'id'=>'trans_comment',
							'class'=>'form-control',
							'rows'=>'3',
							'cols'=>'17')		
						);?>
					</div>
					</table>
					<?php
					echo form_submit(array(
						'name'=>'submit',
						'id'=>'submit',
						'value'=>$this->lang->line('common_submit'),
						'class'=>'btn btn-primary btn-sm pull-right')
					);
					?>
				</fieldset>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
			<script type='text/javascript'>

			//validation and submit handling
			$(document).ready(function()
			{		
				$('#item_form').validate({
					submitHandler:function(form)
					{
						$(form).ajaxSubmit({
						success:function(response)
						{
							//tb_remove();
							$('.modal').modal('hide');
							post_item_form_submit(response);
						},
						dataType:'json'
					});

					},
					errorLabelContainer: "#error_message_box",
					wrapper: "li",
					rules: 
					{
						newquantity:
						{
							required:true,
							number:true
						}
					},
					messages: 
					{
						
						newquantity:
						{
							required:"<?php echo $this->lang->line('items_quantity_required'); ?>",
							number:"<?php echo $this->lang->line('items_quantity_number'); ?>"
						}
					}
				});
			});


			function fill_quantity(val) 
			{   
				var item_quantities= <?php echo json_encode($item_quantities ); ?>;
				document.getElementById("quantity").value = item_quantities[val];
			}
			</script>