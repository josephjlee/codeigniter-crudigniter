<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Produk Edit</h3>
            </div>
			<?php echo form_open('produk/edit/'.$produk['produk_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="produk_nama" class="control-label"><span class="text-danger">*</span>Produk Nama</label>
						<div class="form-group">
							<input type="text" name="produk_nama" value="<?php echo ($this->input->post('produk_nama') ? $this->input->post('produk_nama') : $produk['produk_nama']); ?>" class="form-control" id="produk_nama" />
							<span class="text-danger"><?php echo form_error('produk_nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="produk_harga" class="control-label"><span class="text-danger">*</span>Produk Harga</label>
						<div class="form-group">
							<input type="text" name="produk_harga" value="<?php echo ($this->input->post('produk_harga') ? $this->input->post('produk_harga') : $produk['produk_harga']); ?>" class="form-control" id="produk_harga" />
							<span class="text-danger"><?php echo form_error('produk_harga');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>