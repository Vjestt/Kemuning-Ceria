<div class="page-header">
	<div class="page-title">
		<h4><?= $judul ?></h4>
		<h6>Manage your User</h6>
	</div>
	<div class="page-btn">
		<a href="adduser.html" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#exampleModal"
			data-bs-whatever="@mdo"><img src="<?= base_url('assets/admin/') ?>assets/img/icons/plus.svg" alt="img"
				class="me-2">Add
			User</a>
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
					<a class="btn btn-searchset">
						<img src="<?= base_url('assets/admin/') ?>assets/img/icons/search-white.svg" alt="img">
					</a>
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



		<div class="table-responsive">
			<table class="table  datanew">
				<thead>
					<tr>

						<th>Username</th>
						<th>Name </th>
						<th>Level</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($user as $us) {?>
					<tr>
						<td><?= $us['username'] ?></td>
						<td><?= $us['nama'] ?></td>
						<td><?= $us['level'] ?></td>


						<td>
							<a class="me-3" href="edituser.html" data-bs-toggle="modal"
								data-bs-target="#updateModal<?=$us['id_user']?>" data-bs-whatever="@mdo">
								<img src="<?= base_url('assets/admin/') ?>assets/img/icons/edit.svg" alt="img">
							</a>
							<a class="me-3 button-delete" href="<?= base_url('admin/user/delete/'.$us['id_user']) ?>">
								<img src="<?= base_url('assets/admin/') ?>assets/img/icons/delete.svg" alt="img">
							</a>
						</td>
					</tr>
					<!-- modal update -->
					<div class="modal fade" id="updateModal<?=$us['id_user']?>" tabindex="-1"
						aria-labelledby="exampleModalLabel<?=$us['id_user']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">New message</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<?php echo form_open('admin/user/update'); ?>
									<input type="hidden" name="id_user" value="<?= $us['id_user'];?>">
									<label>Nama: </label>
									<div class="form-group">
										<input type="text" name="nama" class="form-control" value="<?= $us['nama'];?>">
									</div>
									<label>Username: </label>
									<div class="form-group">
										<input type="text" name="username" value="<?= $us['username']; ?>"
											class="form-control" readonly>
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


<!-- Modal tambah  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New message</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php echo form_open('admin/user/create'); ?>

				<div class="mb-4">
				<label for="Nama ">Nama</label>

					<input type="text" name="nama" id="nama" placeholder="Nama" class="form-control" required>
				</div>
		
				<div class="mb-4">
				<label for="username ">Username</label>

					<input type="text" name="username" id="username" placeholder="Username" class="form-control " required>
			
				</div>
	
				<div class="mb-4">
				<label for="password ">password</label>

					<input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
				</div>

				<div class="col-md-6 mb-4">
				<label for="level ">Level</label>

					<fieldset class="mb-4">

						<select class="form-select" name="level"  id="basicSelect">
							<option value="user">User</option>
							<option value="admin">Admin</option>
						</select>
					</fieldset>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" id="tombolSimpan" class="btn btn-primary">Simpan</button>
			</div>
			<?php echo form_close(); ?>
			
		</div>
	</div>
</div>
