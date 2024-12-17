<div class="page-header">
	<div class="page-title">
		<h4>Brand List</h4>
		<h6>Manage your Brand</h6>
	</div>
	<div class="page-btn">
		<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" class="btn btn-added"><img
				src="<?= base_url('assets/admin/') ?>assets/img/icons/plus.svg" class="me-2" alt="img">Add
			konten</a>
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


						<th>Image</th>
						<th>Varian Paket</th>
						<th> Paket</th>
						<th>Harga </th>
						<th>Tanggal</th>
						<th>Creator</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach($konten as $content) {?>

					<tr>

						<td>

							<a href="<?= base_url('assets/img/content/') . $content['foto']?>"
								class="image-popup product-img ">
								<img src="<?= base_url('assets/img/content/') . $content['foto']?>" alt="image"
									class="img-fluid">
							</a>
						</td>
						<td><?= $content['judul']?></td>
						<td><?= $content['nama_paket']?></td>
						<td><?= $content['harga']?>K</td>
						<td><?= $content['tanggal']?></td>
						<td><?= $content['username']?></td>


						<td>
							<a class="me-3" data-bs-toggle="modal"
								data-bs-target="#exampleModal<?= $content['id_konten']?>" data-bs-whatever="@mdo"
								class="btn btn-added">
								<img src="<?= base_url('assets/admin/') ?>assets/img/icons/edit.svg" alt="img">
							</a>
							<a class="me-3 button-delete"
								href="<?= base_url('admin/content/delete/'.$content['id_konten']) ?>">
								<img src="<?= base_url('assets/admin/') ?>assets/img/icons/delete.svg" alt="img">
							</a>
						</td>
					</tr>
					<!-- Modal Edit -->
					<div class="modal fade" id="exampleModal<?= $content['id_konten']?>" tabindex="-1"
						aria-labelledby="exampleModalLabel<?= $content['id_konten']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel<?= $content['id_konten']?>">Update
										Package</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<?php echo form_open_multipart('admin/content/update'); ?>

									<input type="hidden" name="namafoto" value="<?=$content['foto']?>">
									<input type="hidden" name="id_konten" value="<?=$content['id_konten']?>">
									<div class="form-group">
										<label>Nama paket: </label>
										<input type="text" name="judul" value="<?= $content['judul']?>"
											placeholder="Nama paket" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Harga paket: </label>
										<input type="number" name="harga" value="<?= $content['harga']?>"
											placeholder="Harga paket" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Foto: </label>
										<input type="file" name="foto" class="form-control"
											accept="image/png, image/jpeg">
										<div class="">
											Foto sebelumnya: <?= $content['foto']?>
										</div>
									</div>
									<div class="form-group">
										<label>Paket: </label>
										<select name="id_paket" class="form-control form-small select">
											<?php foreach($paket as $pak) { ?>
											<option value="<?=$pak['id_paket']?>"
												<?= $pak['id_paket'] == $content['id_paket'] ? 'selected' : '' ?>>
												<?=$pak['nama_paket']?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label for="fasilitas_paket">Fasilitas yang Ditawarkan:</label>
											<input type="text" name="fasilitas[]" class="form-control" value="<?= $hasil = str_replace(",", " | ", $content['fasilitas']); ?>" placeholder="Masukkan fasilitas">
										
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
				<?php echo form_open_multipart('admin/content/save'); ?>

				<div class="form-group">
					<label>Nama paket: </label>
					<input type="text" name="judul" placeholder="Nama paket" class="form-control" required>
				</div>

				<!-- <label>deskripsi: </label>
				<div class="form-group">
					<textarea rows="5" cols="5" name="deskripsi" class="form-control" placeholder="Enter text here"
						required></textarea>
				</div> -->
				<div class="form-group">
					<label>Harga paket: </label>
					<input type="number" name="harga" placeholder="Harga paket" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Foto: </label>
					<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
				</div>
				<div class="form-group">
					<label>Paket: </label>

					<select name="id_paket" class="form-control form-small select">
						<?php foreach($paket as $pak) {?>
						<option value="<?=$pak['id_paket']?>"><?=$pak['nama_paket']?></option>
						<?php }?>
					</select>
				</div>
				<div class="form-group">
					<label for="fasilitas_paket">Fasilitas yang Ditawarkan:</label>
					<input type="text" name="fasilitas[]" class="form-control"  placeholder="Masukkan fasilitas">
										
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
