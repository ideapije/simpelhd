<h3><?php echo (isset($bapak))? 'Keluarga Bpk. '.ucfirst($bapak) : '';?></h3>
<div class="adv-table editable-table ">
<span class="jsonlink" style="display:none;"><?php echo (isset($link))? site_url($link) : '';?></span>
<div class="space15"></div>
<table class="table table-striped table-hover table-bordered table-responsive" id="simpel-table">
<thead>
<tr>
    <?php if (isset($thead)): ?>
    	<?php
    		foreach ($thead as $key => $value) { ?>
    			<td><?php echo $value;?></td>
    		<?php }
    	?>
    <?php endif;?>
</tr>
</thead> 
<tbody>

</tbody>
</table>
</div>
                      