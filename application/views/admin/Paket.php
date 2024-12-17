<div class="page-header">
	<div class="page-title">
		<h4>Brand List</h4>
		<h6>Manage your Brand</h6>
	</div>
	<div class="page-btn">
		<a href="addbrand.html" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"
			class="btn btn-added"><img src="<?= base_url('assets/admin/') ?>assets/img/icons/plus.svg" class="me-2"
				alt="img">Add Brand</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="table-top">
			<div class="search-set">
				<div class="search-path">
					<a class="btn btn-filter" id="filter_search">
						<img src="<?= base_url('assets/admin/') ?>assets/img/icons/filter.svg" alt="img">
						<span><img src="<?= base_url('assets/admin/') ?>assets/img/icons/closes.svg" alt="img"></span>
					</a>
				</div>
				<div class="search-input">
					<a class="btn btn-searchset"><img
							src="<?= base_url('assets/admin/') ?>assets/img/icons/search-white.svg" alt="img"></a>
				</div>
			</div>
			<div class="wordset">
				<ul>
					<li>
						<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
								src="<?= base_url('assets/admin/') ?>assets/img/icons/pdf.svg" alt="img"></a>
					</li>
					<li>
						<a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
								src="<?= base_url('assets/admin/') ?>assets/img/icons/excel.svg" alt="img"></a>
					</li>
					<li>
						<a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
								src="<?= base_url('assets/admin/') ?>assets/img/icons/printer.svg" alt="img"></a>
					</li>
				</ul>
			</div>
		</div>

		<div class="card" id="filter_inputs">
			<div class="card-body pb-0">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" placeholder="Enter Brand Name">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" placeholder="Enter Brand Description">
						</div>
					</div>
					<div class="col-lg-1 col-sm-6 col-12 ms-auto">
						<div class="form-group">
							<a class="btn btn-filters ms-auto"><img
									src="<?= base_url('assets/admin/') ?>assets/img/icons/search-whites.svg"
									alt="img"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table datanew">
				<thead>
					<tr>


						<th>Nama Paket</th>
						<th>Deskripsi</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($paket as $pak) {?>



					<tr>


						<td><?=$pak['nama_paket']?></td>
						<td><?=substr($pak['deskripsi'],0, 20)?>...</td>
						<td>
							<a class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$pak['id_paket']?>">
								Image paket..
							</a>
						</td>
						<td>
							<a class="me-3" data-bs-toggle="modal" data-bs-target="#updateModal<?=$pak['id_paket']?>" data-bs-whatever="@mdo"
							class="btn btn-added">
								<img src="<?= base_url('assets/admin/') ?>assets/img/icons/edit.svg" alt="img">
							</a>
							<a class="me-3 button-delete" href="<?= base_url('admin/paket/delete/'.$pak['id_paket']) ?>">
								<img src="<?= base_url('assets/admin/') ?>assets/img/icons/delete.svg" alt="img">
							</a>
						</td>
					</tr>


					<div class="modal fade" id="updateModal<?=$pak['id_paket']?>" tabindex="-1" aria-labelledby="updateModalLabel<?=$pak['id_paket']?>"
						aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="updateModalLabel<?=$pak['id_paket']?>">New message</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<?php echo form_open_multipart('admin/paket/update'); ?>
									<input type="hidden" name="nama_foto" value="<?=$pak['foto_paket']?>" >
									<input type="hidden" name="id_paket" value="<?=$pak['id_paket']?>" >
									<input type="hidden" name="galeri_foto" value="<?=$pak['galeri']?>" >
									<label>Nama paket: </label>
									<div class="form-group">
										<input type="text" name="nama_paket" placeholder="Nama paket"
											class="form-control" value="<?=$pak['nama_paket']?>" required>
									</div>
									<label>Foto: </label>
									<div class="form-group">
										<input type="file" name="foto_paket" class="form-control" value="<?=$pak['foto_paket']?>" required>
										<p>foto sekarang..  <?=$pak['foto_paket']?></p>
									</div>
									<label>deskripsi: </label>
									<div class="form-group">
										<textarea rows="5" cols="5" maxlength="200" name="deskripsi" class="form-control"
											placeholder="Enter text here"  required><?=$pak['deskripsi']?></textarea>
									</div>
									<label>Galeri: </label>
									<div class="form-group">
										<input type="file" name="galeri[]" class="form-control" value="<?=$pak['galeri']?>" multiple  >
										<p>foto sekarang..  <?=$pak['galeri']?></p>

									</div>


								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary"
										data-bs-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>


					<div class="modal fade" id="exampleModal<?=$pak['id_paket']?>" tabindex="-1"
						aria-labelledby="exampleModalLabel<?=$pak['id_paket']?>" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel<?=$pak['id_paket']?>">Modal title</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class=" text-center mb-3 ">
									   <h1 class="mt-">FOTO</h1>

										<img src="<?=base_url('assets/img/paket/').$pak['foto_paket']?>" alt="">
										<h1 class="mt-5">GALERI FOTO</h1>
									</div>
									<div class="row">
										<?php $galeri = explode(' | ', $pak['galeri']); foreach ($galeri as $picture): $picture = trim($picture) ?>
										<div class="col-md-4 mb-3">
											<img src="<?=base_url('assets/img/paket/').$picture?>" alt="" sizes="100vw">
										</div>
										<?php endforeach;?>

									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary"
										data-bs-dismiss="modal">Close</button>
									
								</div>
							</div>
						</div>
					</div>
					<?php }; ?>

				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New message</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('admin/paket/save'); ?>
				
				<label>Nama paket: </label>
				<div class="form-group">
					<input type="text" name="nama_paket" placeholder="Nama paket" class="form-control" required>
				</div>
				<label>Foto: </label>
				<div class="form-group">
					<input type="file" name="foto_paket" class="form-control" required>
				</div>
				<label>deskripsi: </label>
				<div class="form-group">
					<textarea rows="5" cols="5" name="deskripsi" class="form-control" placeholder="Enter text here"
						required></textarea>
				</div>
				<label>Galeri: </label>
				<div class="form-group">
					<input type="file" name="galeri[]" class="form-control" multiple required>
				</div>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
