<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" 
		href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
	<link rel="stylesheet" type="text/css" 
		href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" />
	<link rel="stylesheet" type="text/css" 
		href="<?php echo base_url('assets/css/bootstrap-notifications.min.css');?>" />
	<link rel="stylesheet" type="text/css" 
		href="<?php echo base_url('assets/custom/css/sticky-footer-navbar.css');?>" />
    <link href="<?=base_url('assets/custom/css/font1.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/custom/css/font2.css')?>" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url('assets/custom/css/custom.css');?>" />

<style type="text/css">

</style>

</head>
<body class="background-tables">
	<div id="Codeigniter" data-url="<?=base_url()?>">
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('/');?>">
            	<img src="<?=site_url('assets/images/2.jpg')?>" class="img-responsive" width="120">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
      			<?php 
					$data = $this->db->select('id_kelurahan')->get('kelurahan');
					if($data->num_rows()<=0){
						unset($navigasi[2]);					
						unset($navigasi[3]);										
					}

                  	if (function_exists('render_top_navigation') && isset($navigasi)) {
                      	render_top_navigation($navigasi);
                  	}
                ?>
            </ul>
            <form class="navbar-form navbar-right" style="padding-top:5px;">
				<a  href="<?php echo site_url($me.'/logout');?>" class="btn btn-default">
					<i class="glyphicon glyphicon-log-out"> </i>Keluar
				</a>
			</form>
            <ul class="nav navbar-nav navbar-right">
            	<li>
					<a href="<?php echo site_url($me.'/detail_pribadi');?>">
						<?php echo (isset($username))? 'Hai ! '.$username : 'Anonymous';?>
					</a>
				</li>
			</ul>
            <div class="nav navbar-nav navbar-right">
      			<ul class="nav navbar-nav navbar-right nav-bell">
        		<li class="dropdown dropdown-notifications">
            		<a href="#" class="dropdown-toggle" id="list-notif-lg" data-toggle="dropdown">
              			<i data-count="<?php echo (isset($notif_count))? $notif_count : 0;?>" 
              				class="glyphicon glyphicon-bell notification-icon"></i>
           			</a>
            		<div class="dropdown-container" aria-labelledby="list-notif-lg">
              		<div class="dropdown-toolbar">
                		<div class="dropdown-toolbar-actions">
                  			<a href="#">Mark all as read</a>
                		</div>
                		<h3 class="dropdown-toolbar-title">
                			Notifications (<?php echo (isset($notif_count))? $notif_count : 0;?>)
                		</h3>
              		</div><!-- /dropdown-toolbar -->
    			
    				<ul class="dropdown-menu notifications">
    					<?php echo (isset($notif_items))? $notif_items : '';?>
      				</ul>
              		<div class="dropdown-footer text-center">
                		<a href="#">View All</a>
              		</div><!-- /dropdown-footer -->
            		</div><!-- /dropdown-container -->
          		</li>
      			</ul>

            </div>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

<div class="container-fluid" style="margin-top: 75px;">
	<div class="row">
		<div class="col-xs-12 col-md-6" style="position: absolute; z-index: 999; left: 0px; margin-top: 5px;">
			<div style="margin-bottom: 15px;">
				<?php
				if (isset($tools) && is_array($tools) && isset($me) && isset($table_name)) {
					$action_toolbar 	= '';
					$color 		= array('primary','default','info','warning','danger');
					$class_btn 	= '';
					$index		= 0;
					foreach ($tools as $key => $value) {
						$class_btn 	= 'btn btn-'.$color[0];
						if (isset($color[$index])) {
							$class_btn 	= ' btn btn-'.$color[$index];
						}
						if (strpos($value, '/') !== false) {
							$explode 	= explode('/', $value);
							$label 		= str_replace('_', ' ', $explode[1]);
							/*if ($explode[1] !== 'registrasi_user') {
								$label .="&nbsp;".$explode[0];
							}*/

							$action_toolbar .= anchor($value,ucfirst('<i style="color:#4885ED;" class="fa fa-plus" aria-hidden="true"></i> &nbsp;&nbsp;'.$label),array(
									'class'=>'btn btn-primary btn-custom-a'
								)
							);
						}else{
							
							$url = $me.'/'.$value;
							if (in_array($value, array('tambah','edit','hapus'))) {
								$url .='/'.$table_name; 
							}
							$label 	= str_replace('_',' ', $value);
							$label 	= ucfirst($label);
							$action_toolbar .= anchor($url,$label,array(
								'class'=>$class_btn
								)
							);
						}
						$index++;
					}
					echo $action_toolbar;
				}
		?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<?php echo (isset($alert))? $alert : '' ;?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<?php if(isset($sources)) : ?>

<!--<div class="table-responsive">-->
	
	<table class="table table-hover" id="gl-table" >
  	<thead>
	  		<?php
	  			if (isset($columns)) {
	  				echo '<th>'.strtoupper('No.').'</th>';
	  				foreach ($columns as $key => $value) {
	  					if (isset($show) && in_array($value, $show)) {
	  						if (function_exists('set_datatables_column')) {
	  							echo '<th>'.set_datatables_column($value).'</th>';
	  						}else{
	  							echo '<th>'.$value.'</th>';
	  						}
	  					}elseif (!isset($show)) {
	  						if (function_exists('set_datatables_column')) {
	  							echo '<th>'.set_datatables_column($value).'</th>';
	  						}else{
	  							echo '<th>'.$value.'</th>';
	  						}
	  					}
	  				}
	  				
	  				echo '<th>'.strtoupper('tindakan').'</th>';
	  			}
	  		?>
		</tr>

	</thead>
	<tbody class="text-center">
		<?php $i=1;
			if (isset($columns) && $sources && is_array($sources)) {
				foreach ($sources as $key => $value) {
					echo '<tr>';
					echo '<th>'.$i++.'.</th>';
		 			foreach ($columns as $k => $field) {
		 				
		 				if (isset($show) && in_array($field, $show)) {
		 					echo '<td>';
		 					
		 					$data = ucwords(is_object($value) ? $value->$field : $value[$field]); // disini
		 					$len  = strlen($data);

		 					if (strpos($field,'harga_') !== false && $len > 0) {
		 						$data = show_currency_format($data);
		 					}
		 					echo (isset($data))? $data : '';
		 					echo  '</td>';
		 				}elseif (!isset($show)) {
		 					echo '<td>';
		 					echo (isset($value[$field]))? ucwords($value[$field]) : '';
		 					echo  '</td>';
		 				}
		 			}
		 			echo '<td>';
		 			$_id = 0;
		 			if (isset($primary_key)) {
		 				// if (isset($value->$primary_key)) { // disini 
		 					$_id = is_object($value) ? $value->$primary_key : $value[$primary_key]; // disni
		 				// }
		 			}
		 			if (function_exists('set_datatables_action') && isset($group_id)) {
		 				if (isset($action[$group_id])) {
		 					set_datatables_action($action[$group_id],$_id,$value);
		 				}
		 			}
		 			echo '</td>';
		 			
		 			echo '</tr>';
				}
				
			}

		?>	
	</tbody>
</table>

<!--</div>-->
	
<?php endif; ?>
		</div>
	</div>
	


</div>
    <footer class="footer">
      <div class="text-center">
        	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php 
        		if (ENVIRONMENT === 'development') {
        			echo 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>';
        		}
        	?></p>
      </div>
</footer>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/datatables.min.js');?>">
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js');?>">
</script>
<script type="text/javascript" href="<?php echo base_url('assets/js/bootstrap.min.js');?>"> </script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.min.js');?>"> </script>
<script type="text/javascript">
	$(document).ready(function(){
		if ($('#gl-table').length == 1) {
        	
			$('#gl-table').DataTable({
			    language: {
			        searchPlaceholder: "Cari Identitas...",
			         "sSearch": '<i class="fa fa-search" aria-hidden="true"></i>'
			    },
			    "bLengthChange": false
			});
		}
		//$('input[type="search"]').css('width','');
	});
</script>
</body>
</html>