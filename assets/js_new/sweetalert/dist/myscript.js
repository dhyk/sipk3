const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
	Swal({
		title: 'Anda berhasil',
		text: 'Masuk' + flashdata,
		type: 'success'
	})
}