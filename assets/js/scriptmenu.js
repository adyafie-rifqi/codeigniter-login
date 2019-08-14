$(function () {

	$('.tombolTambahMenu').on('click', function (event) {
		event.preventDefault();
		// location.reload();
		$('#formModalLabel').html('Tambah Menu Baru');
		$('.modal-footer button[type=submit]').html('Tambah Menu');
		$('#menu').val('');
	});

	$('.tampilModalUbah').on('click', function (event) {
		event.preventDefault();
		$('#formModalLabel').html('Ubah Menu');
		$('.modal-header button[type=button]').on('click', function (event) {
			event.preventDefault();
			setTimeout(function () {
				location.reload();
			}, 500);
		});
		$('.modal-footer button[type=submit]').html('Ubah Menu');
		$('.modal-footer button[type=button]').on('click', function (event) {
			event.preventDefault();
			setTimeout(function () {
				location.reload();
			}, 500);
		});
		$('.modal-body form').attr('action', 'http://localhost/codeigniter-login/menu/ubahmenu');
		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/codeigniter-login/menu/getubahmenu',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#id').val(data.id);
				$('#menu').val(data.menu);
			}
		});
	});


});
