<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detail Penjualan Edit</h3>
            </div>
			<?php echo form_open('detail_penjualan/edit/'.$detail_penjualan['detail_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="detail_penjualan_nota" class="control-label"><span class="text-danger">*</span>Penjualan</label>
						<div class="form-group">
							<select name="detail_penjualan_nota" class="form-control">
								<option value="">select penjualan</option>
								<?php 
								foreach($all_penjualan as $penjualan)
								{
									$selected = ($penjualan['penjualan_id'] == $detail_penjualan['detail_penjualan_nota']) ? ' selected="selected"' : "";

									echo '<option value="'.$penjualan['penjualan_id'].'" '.$selected.'>'.$penjualan['penjualan_nota'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('detail_penjualan_nota');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="detail_produk_id" class="control-label"><span class="text-danger">*</span>Produk</label>
						<div class="form-group">
							<select name="detail_produk_id" class="form-control">
								<option value="">select produk</option>
								<?php 
								foreach($all_produk as $produk)
								{
									$selected = ($produk['produk_id'] == $detail_penjualan['detail_produk_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$produk['produk_id'].'" '.$selected.'>'.$produk['produk_id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('detail_produk_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="detail_jumlah_beli" class="control-label"><span class="text-danger">*</span>Detail Jumlah Beli</label>
						<div class="form-group">
							<input type="text" name="detail_jumlah_beli" value="<?php echo ($this->input->post('detail_jumlah_beli') ? $this->input->post('detail_jumlah_beli') : $detail_penjualan['detail_jumlah_beli']); ?>" class="form-control" id="detail_jumlah_beli" />
							<span class="text-danger"><?php echo form_error('detail_jumlah_beli');?></span>
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