<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Penjualan Add</h3>
            </div>
            <?php echo form_open('penjualan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="penjualan_kasir_id" class="control-label"><span class="text-danger">*</span>Kasir</label>
						<div class="form-group">
							<select name="penjualan_kasir_id" class="form-control">
								<option value="">select kasir</option>
								<?php 
								foreach($all_kasir as $kasir)
								{
									$selected = ($kasir['kasir_id'] == $this->input->post('penjualan_kasir_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$kasir['kasir_id'].'" '.$selected.'>'.$kasir['kasir_id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('penjualan_kasir_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="penjualan_nota" class="control-label"><span class="text-danger">*</span>Penjualan Nota</label>
						<div class="form-group">
							<input type="text" name="penjualan_nota" value="<?php echo $this->input->post('penjualan_nota'); ?>" class="form-control" id="penjualan_nota" />
							<span class="text-danger"><?php echo form_error('penjualan_nota');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="penjualan_tgl" class="control-label"><span class="text-danger">*</span>Penjualan Tgl</label>
						<div class="form-group">
							<input type="text" name="penjualan_tgl" value="<?php echo $this->input->post('penjualan_tgl'); ?>" class="has-datepicker form-control" id="penjualan_tgl" />
							<span class="text-danger"><?php echo form_error('penjualan_tgl');?></span>
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