<?php if (isset($person) && $person) {
	foreach ($person as $key => $value) { ?>
		<label><?php echo $key;?></label>
		<input type="text" class="form-control" name="<?php echo $key;?>" value="<?php echo $value;?>" />
	<?php }	
}?>

