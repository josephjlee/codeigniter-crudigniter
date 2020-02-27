<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Kasir Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('kasir/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Kasir Id</th>
						<th>Kasir Nama</th>
						<th>Kasir Email</th>
						<th>Kasir Telepon</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($kasir as $k){ ?>
                    <tr>
						<td><?php echo $k['kasir_id']; ?></td>
						<td><?php echo $k['kasir_nama']; ?></td>
						<td><?php echo $k['kasir_email']; ?></td>
						<td><?php echo $k['kasir_telepon']; ?></td>
						<td>
                            <a href="<?php echo site_url('kasir/edit/'.$k['kasir_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('kasir/remove/'.$k['kasir_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
