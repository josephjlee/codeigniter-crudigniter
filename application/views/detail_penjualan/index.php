<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Penjualan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('detail_penjualan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Detail Id</th>
						<th>Detail Penjualan Nota</th>
						<th>Detail Produk Id</th>
						<th>Detail Jumlah Beli</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($detail_penjualan as $d){ ?>
                    <tr>
						<td><?php echo $d['detail_id']; ?></td>
						<td><?php echo $d['detail_penjualan_nota']; ?></td>
						<td><?php echo $d['detail_produk_id']; ?></td>
						<td><?php echo $d['detail_jumlah_beli']; ?></td>
						<td>
                            <a href="<?php echo site_url('detail_penjualan/edit/'.$d['detail_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('detail_penjualan/remove/'.$d['detail_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
