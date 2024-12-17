<script src="<?= base_url('assets/admin/') ?>assets/js/jquery-3.6.0.min.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/js/feather.min.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/js/jquery.slimscroll.min.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/dataTables.bootstrap4.min.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/plugins/lightbox/glightbox.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/lightbox/lightbox.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/apexchart/chart-data.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/select2/js/custom-select.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/js/script.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/js/sweetalert2.all.min.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/js/alert.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/js/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/plugins/stickynote/sticky.js"></script>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		document.querySelector('#add-facility-btn').addEventListener('click', function () {
			const firstFacilityInput = document.querySelector('#fasilitas-list .form-control');
			const firstFacilityValue = firstFacilityInput.value.trim();

			if (firstFacilityValue !== '') {
				const newFacilityInput = document.createElement('div');
				newFacilityInput.className = 'row mb-2';
				newFacilityInput.innerHTML = `
                <div class="col-lg-10 col-sm-10 col-10">
                    <input type="text" name="fasilitas[]" class="form-control" value="${firstFacilityValue}" placeholder="Masukkan fasilitas">
                </div>
                <div class="col-lg-2 col-sm-2 col-2 ps-0 mb-2">
                    <div class="add-icon">
                        <a href="javascript:void(0);" class="remove-facility-btn btn-danger">
                            <img src="<?= base_url('assets/admin/') ?>assets/img/icons/minus.svg" alt="img">
                        </a>
                    </div>
                </div>
            `;
				document.querySelector('#fasilitas-list').appendChild(newFacilityInput);

				// Bersihkan input pertama untuk entri baru
				firstFacilityInput.value = '';

				// Tambahkan event listener untuk tombol hapus
				newFacilityInput.querySelector('.remove-facility-btn').addEventListener('click',
					function () {
						newFacilityInput.remove();
					});
			}
		});
	});

</script>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		// Delegasi event listener untuk elemen dengan kelas 'remove'
		document.addEventListener('click', function (event) {
			if (event.target.closest('.remove')) {
				event.target.closest('.row').remove();
			}
		});
	});

</script>

<!-- <script>
	function myFunction(id) {

		const firstFacilityInput = document.querySelector(`#fasilitas-list${id} .form-control`);
		const firstFacilityValue = firstFacilityInput.value.trim();

		if (firstFacilityValue !== '') {
			console.log(firstFacilityValue);
			const newFacilityInput = document.createElement('div');
				newFacilityInput.className = 'row mb-2';
				newFacilityInput.innerHTML = `
                <div class="col-lg-10 col-sm-10 col-10">
                    <input type="text" name="fasilitas[]" class="form-control" value="${firstFacilityValue}" placeholder="Masukkan fasilitas">
                </div>
                <div class="col-lg-2 col-sm-2 col-2 ps-0 mb-2">
                    <div class="add-icon">
                        <a href="javascript:void(0);" class="remove-facility-btn btn-danger">
                            <img src="<?= base_url('assets/admin/') ?>assets/img/icons/minus.svg" alt="img">
                        </a>
                    </div>
                </div>
            `;
			document.querySelector(`#fasilitas-list${id}`).appendChild(newFacilityInput);

			// Bersihkan input pertama untuk entri baru
			firstFacilityInput.value = '';

		}
	}

</script> -->

<script>
$(document).ready(function() {
  $('input[name="fasilitas[]"]').on('input', function() {
      var value = $(this).val();

      // Mengganti 2 spasi atau lebih dengan ' | '
      if (value.match(/\s{2,}/)) {
          value = value.replace(/\s{2,}/g, ' | ');
      }

      // Menghapus | jika tidak berjarak 1 spasi dari inputan
      value = value.replace(/(\|$)/g, '');

      $(this).val(value);

     
  });
});
</script>



