<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Basic Inputs</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Basic Inputs</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Configurasi</h5>
							</div>
							<div class="card-body">
                                <?php foreach ($configurasi as $con) {?>
                                    <?php echo form_open('admin/configurasi/update'); ?>


									<div class="form-group row">
										<label class="col-form-label col-md-2">judul Website</label>
										<div class="col-md-10">
											<input type="text" name="judul_website" value="<?=$con['judul_website'] ?>" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Profil Website</label>
										<div class="col-md-10">
											<input type="text" name="profil_website" value="<?= $con['profil_website'] ?>" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Instagram</label>
										<div class="col-md-10">
											<input type="text" name="instagram" value="<?= $con['instagram']?>" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Facebook</label>
										<div class="col-md-10">
											<input type="text" name="facebook" value="<?= $con['facebook']?>" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Email</label>
										<div class="col-md-10">
											<input type="text" name="email" value="<?=$con['email'] ?>" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Alamat</label>
										<div class="col-md-10">
											<input type="text" name="alamat" value="<?= $con['alamat']?>" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">No Wa</label>
										<div class="col-md-10">
											<input type="number" name="no_wa" value="<?=$con['no_wa'] ?>" class="form-control">
										</div>
									</div>
									<div class="modal-footer">
									
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
									
                                <?php echo form_close(); ?>
                                <?php } ?>
							</div>
						</div>
						
					</div>
				</div>