<div class="modal-dialog" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-content">
		<div class="modal-header">
			<strong><?php echo $this->lang->line($controller_name . '_new'); ?></strong>
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>		
		</div>		
		<div class="modal-body" >
			<?php echo form_open('suppliers/save/'.$person_info->person_id,array('id'=>'supplier_form','class' => 'form-horizontal' )); ?>			
			<div id="required_fields_message"><?php echo $this->lang->line('common_fields_required_message'); ?></div>			
			<ul id="error_message_box" class="error_message_box"></ul>			
			<fieldset id="supplier_basic_info">			
			<legend><?php echo $this->lang->line("suppliers_basic_information"); ?></legend>			
				<div class="form-group">				
					<?php echo form_label($this->lang->line('suppliers_company_name').':', 'company_name',array('class'=>'control-label col-xs-4 required')); ?>				
					<div class='col-xs-6'>				
						<?php echo form_input(array('class'=>'form-control','name'=>'company_name',	'id'=>'company_name_input',	'value'=>$person_info->company_name));?>
					</div>			
				</div>		
				<div class="form-group">				
					<?php echo form_label($this->lang->line('suppliers_agency_name').':', 'agency_name',array('class'=>'control-label col-xs-4')); ?>				
					<div class='col-xs-6'>
						<?php echo form_input(array('name'=>'agency_name','class'=>'form-control','id'=>'agency_name_input','value'=>$person_info->agency_name));?>	
					</div>			
				</div>			
					<?php $this->load->view("people/form_basic_info"); ?>
					<div class="form-group">
						<?php echo form_label($this->lang->line('suppliers_account_number').':', 'account_number',array('class'=>'control-label col-xs-4')); ?>	
						<div class='col-xs-6'>
							<?php echo form_input(array('name'=>'account_number','class'=>'form-control','id'=>'account_number','value'=>$person_info->account_number));?>
						</div>			
					</div>			
						<?php echo form_submit(array('name'=>'submit','id'=>'submit','value'=>$this->lang->line('common_submit'),'class'=>'btn btn-primary btn-sm pull-right'));?>
			</fieldset>	
		</div>
	</div>
</div>
<?php echo form_close(); ?>	
<script type='text/javascript'>	
//validation and submit handling		
$(document).ready(function(){
	$('#supplier_form').validate({
		submitHandler:function(form){
			$(form).ajaxSubmit({
				success:function(response){	
				$('.modal').modal('hide');
				post_person_form_submit(response);
				},				
				dataType:'json'
				});	
			},
			errorLabelContainer: "#error_message_box",wrapper: "li",rules:{
				company_name: "required",
				first_name: "required",					
				last_name: "required",					
				email: "email"
				},				
			messages: {					
			company_name: "<?php echo $this->lang->line('suppliers_company_name_required'); ?>",
			last_name: "<?php echo $this->lang->line('common_last_name_required'); ?>",					
			email: "<?php echo $this->lang->line('common_email_invalid_format'); ?>"		
			}			
		});		
	});		
</script>