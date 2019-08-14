$(function () {

	$('.tombolTambahRole').on('click', function (event) {
		event.preventDefault();
		// location.reload();
		$('#formModalLabel3').html('Tambah Role Baru');
		$('.modal-footer button[type=submit]').html('Tambah Role');
		$('#role').val('');
	});

	$('.tampilModalUbahRole').on('click', function (event) {
		event.preventDefault();
		$('#formModalLabel3').html('Ubah Role');
		$('.modal-header button[type=button]').on('click', function (event) {
			event.preventDefault();
			setTimeout(function () {
				location.reload();
			}, 500);
		});
		$('.modal-footer button[type=submit]').html('Ubah Role');
		$('.modal-footer button[type=button]').on('click', function (event) {
			event.preventDefault();
			setTimeout(function () {
				location.reload();
			}, 500);
		});
		$('.modal-body form').attr('action', 'http://localhost/codeigniter-login/admin/ubahrole');
		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/codeigniter-login/admin/getubahrole',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				// console.log(data);
				$('#id').val(data.id);
				$('#role').val(data.role);
			}
		});
	});


});
