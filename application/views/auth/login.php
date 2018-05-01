<div style="clear: both;"> </div>
<style type="text/css">
.form-control{
    box-shadow: 0px!important;
    outline: none!important;
    border-radius: 0px!important;
    -webkit-box-shadow:none!important;
    border-bottom: 1px solid #CFD2D5;
    font-size: 14px;
}
.form-control:focus{
	border-top: 0px;
	border-left: 0px;
	border-right: 0px;
	border-bottom: 2px solid #4885ED;
}
.form-control{
	transition: all 0s cubic-bezier(.25,.8,.25,1);
}
</style>
<div style="width: 30%; margin:auto;">
	<div class="box-login text-center">
		<img src="<?=base_url('assets/images/2.png')?>" class="img-responsive center-block" width="50" style="margin-top: 15px;">
			<h2 style="margin-bottom: 25px;">Limbangan Kulon</h2>

		<?php echo form_open("auth/login");?>

	          <div class="form-group">
	           <!--  <label><?php echo lang('login_identity_label', 'identity');?></label> -->
	            <?php echo form_input($identity);?>
	          </div>

	          <div class="form-group" style="margin-top: 15px;">
	            <!-- <label><?php echo lang('login_password_label', 'password');?></label> -->
	            <?php echo form_input($password);?>
	          </div>
	<div style="margin-top: 35px;">
	<?php echo form_submit('submit', lang('login_submit_btn'),array('class'=>'btn btn-login col-md-12'));?>
	</div>
		<div class="bot-form">
			<div class="pull-right" style="margin-top: 25px;">
			<p>
				<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
				<?php echo lang('login_remember_label');?>
			</p>
		</div>
		<div class="pull-left" style="margin-top: 25px;">
			<p><a href="<?php echo site_url('auth/forgot_password');?>"><?php echo lang('login_forgot_password');?></a></p>
		</div>
		</div>
	<?php echo form_close();?> 
	</div>
</div>