<div class="row">
    <div class="col-lg-12">
    <section class="panel">
    <header class="panel-heading">
        DATA KELUARGA Bpk 
        <strong><?php echo (isset($details))? ucfirst($details->nama): 'Anonymous';?></strong> 
        <a href="#simpelmodal" class="btn btn-success" data-toggle="modal" title="lihat details"><i class="glyphicon glyphicon-zoom-in"></i></a>
    </header>
    <div class="panel-body">
    <?php 
    if (!is_null($errors)) { ?>
        <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo $errors;?></div>
    <?php }?>
    
    <?php echo (isset($part))? $part : '';?>

    </div>
    </section>
    </div>
</div>