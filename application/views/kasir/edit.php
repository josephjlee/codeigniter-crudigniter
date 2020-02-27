<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Kasir Edit</h3>
            </div>
			<?php echo form_open('kasir/edit/'.$kasir['kasir_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="kasir_nama" class="control-label"><span class="text-danger">*</span>Kasir Nama</label>
						<div class="form-group">
							<input type="text" name="kasir_nama" value="<?php echo ($this->input->post('kasir_nama') ? $this->input->post('kasir_nama') : $kasir['kasir_nama']); ?>" class="form-control" id="kasir_nama" />
							<span class="text-danger"><?php echo form_error('kasir_nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kasir_email" class="control-label"><span class="text-danger">*</span>Kasir Email</label>
						<div class="form-group">
							<input type="text" name="kasir_email" value="<?php echo ($this->input->post('kasir_email') ? $this->input->post('kasir_email') : $kasir['kasir_email']); ?>" class="form-control" id="kasir_email" />
							<span class="text-danger"><?php echo form_error('kasir_email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kasir_telepon" class="control-label"><span class="text-danger">*</span>Kasir Telepon</label>
						<div class="form-group">
							<input type="text" name="kasir_telepon" value="<?php echo ($this->input->post('kasir_telepon') ? $this->input->post('kasir_telepon') : $kasir['kasir_telepon']); ?>" class="form-control" id="kasir_telepon" />
							<span class="text-danger"><?php echo form_error('kasir_telepon');?></span>
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