const flashData = $('.flash-data').data('flashdata');
const flashError = $('.error-data').data('errordata');

if (flashData) {
	Swal.fire({
		title: 'Berhasil',
		text: flashData,
		icon: 'success',
	});
}

if (flashError) {
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Username tidak boleh sama",
      });
    }    

$('.button-delete').on('click', function(e){

    e.preventDefault();

    const href = $(this).attr('href');

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: "btn btn-primary",
          cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
      });
      swalWithBootstrapButtons.fire({
        title: "Apakah anda yakin?",
        text: "Data ini akan di hapus!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
          
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire({
            title: "Cancelled",
            text: "Your imaginary file is safe :)",
            icon: "error"
          });
        }
      });

});



