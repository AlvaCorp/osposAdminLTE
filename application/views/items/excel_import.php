<div class="modal-dialog" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-content">
		<div class="modal-header">
			<strong>Import Items from Excel</strong>
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>
		<div class="modal-body" >
			<?php echo form_open_multipart('items/do_excel_import/',array('id'=>'item_form','data-target' => 'ajaxModal', 'class' => 'form-horizontal')); ?>
				<div id="required_fields_message"><?php echo $this->lang->line('items_import_items_excel'); ?></div>
				<ul id="error_message_box" class="error_message_box"></ul>
				
				<fieldset id="item_basic_info">
					<legend><?php echo $this->lang->line('common_import'); ?></legend>
					<div class="form-group">
						<div class="col-xs-6">
							<a href="<?php echo site_url('items/excel'); ?>"><?php echo $this->lang->line('common_download_import_template'); ?></a>
						</div>
					</div>
					<div class="form-group">	
					<?php echo form_label($this->lang->line('common_import_file_path').':', 'name',array('class'=>'control-label col-xs-4')); ?>
						<div class='col-xs-6'>
						<?php echo form_upload(array(
							'name'=>'file_path',
							'id'=>'file_path',
							'value'=>'')
						);?>
						</div>
					</div>

					<?php
					echo form_submit(array(
						'name'=>'submitf',
						'id'=>'submitf',
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
			file_path:"required"
   		},
		messages: 
		{
   			file_path:"<?php echo $this->lang->line('common_import_full_path'); ?>"
		}
	});
});
</script>