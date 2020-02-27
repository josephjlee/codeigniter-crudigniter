<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Penjualan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('penjualan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Penjualan Id</th>
						<th>Penjualan Kasir Id</th>
						<th>Penjualan Nota</th>
						<th>Penjualan Tgl</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($penjualan as $p){ ?>
                    <tr>
						<td><?php echo $p['penjualan_id']; ?></td>
						<td><?php echo $p['penjualan_kasir_id']; ?></td>
						<td><?php echo $p['penjualan_nota']; ?></td>
						<td><?php echo $p['penjualan_tgl']; ?></td>
						<td>
                            <a href="<?php echo site_url('penjualan/edit/'.$p['penjualan_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('penjualan/remove/'.$p['penjualan_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
