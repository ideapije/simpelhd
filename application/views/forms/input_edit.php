<style type="text/css">
[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: relative;
    left: 0px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #666;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: relative;
    left: 0;
    top: 0;
    width: 20px;
    height: 20px;
    border: 2px solid #FF5E5E;
    border-radius: 100%;
    background: #fff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: #FF5E5E;
    position: relative;
    top: 4px;
    left: 4px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 1;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}
</style>

<div class="row">
	<div class="col-md-6">
		<ol class="breadcrumb" style="position: absolute; z-index: 99;">
		  <li><a href="<?=base_url('welcome')?>">Home</a></li>
		  <li><a href="<?=base_url('welcome/daftar/person')?>">Person</a></li>
		  <li class="active">Edit Person</li>
		</ol>
	</div>
</div>

<form action="<?php echo (isset($table_name) && isset($me))? site_url($me.'/simpan/'.$table_name) : '#';?>" method="post" enctype="multipart/form-data">

	<div class="row">
  		<div class="col">
  			<div class="text-center">
  				
  				<button type="submit" class="btn btn-primary">
  					<i class="fa fa-send"></i>
  					Simpan
  				</button>
  			</div>	
  		</div>
  	</div>

	<div class="row">
		<div class="col-md-12" style="margin-bottom: 10px;">
			<div style="width: 50%; margin:auto;">
	<?php 

	if(isset($fields)) :
		$input_key 		='';
		$max 			= 6;
		$amount_fields 	= count($fields); 

		if ($amount_fields <= $max) {
			$max 		= 3;
		}

		if (isset($detail) && is_object($detail)) {
			if (isset($primary_key) && !is_null($detail->$primary_key)) {
				$input_key ="<input type='hidden' name='$primary_key' value='$detail->$primary_key' />";
			}
		}elseif (isset($detail) && is_array($detail)) {
			if (isset($primary_key) && isset($detail[$primary_key])) {
				$input_key ="<input type='hidden' name='$primary_key' value='$detail[$primary_key]' />";
			}
		}

		echo $input_key;
		

		foreach ($fields as $index => $field) : 
			$value 		= '';
			if (isset($detail) && is_object($detail)) {
				$value 	= (!is_null($detail->$field))? $detail->$field : '';

			}elseif (isset($detail) && is_array($detail)) {
				$value 	= (isset($detail[$field]))? $detail[$field] : '';
				
			}

			$input ='<div class="form-group">';
			
			if (function_exists('set_datatables_column')) {
				$input .='<label for="">'.set_datatables_column($field).'</label>';
			}

			if (isset($table_name)) {
				if (function_exists('get_data_type') && function_exists('render_input_html')) {
					$type = get_data_type($table_name,$field);
					$input .= render_input_html($type,$field,$value);
				}
			}

	//$input .='<input type="text" class="form-control" name="'.$field.'" value="'.$value.'">';

			$input .='</div>';

			$grid = '';
			if ($index == 0) {
				$grid .= '<div class="col">'.$input;
			}elseif ($index+1 == $max ) {
				$grid .= $input.'</div><div class="col">';
			}elseif ($index+1 ==  $amount_fields ) {
				$grid .= $input.'</div>';
			}else{
				$grid .= $input;
			}

			echo $grid;


		
		endforeach; 

	endif; ?>
			</div>
		</div>
	</div>
	
	<div class="row" style="margin-bottom: 25px;">
  		<div class="col">
  			<div class="text-center">
  				
  				<button type="submit" class="btn btn-primary">
  					<i class="fa fa-send"></i>
  					Simpan
  				</button>
  			</div>	
  		</div>
  	</div>
  	
</form>