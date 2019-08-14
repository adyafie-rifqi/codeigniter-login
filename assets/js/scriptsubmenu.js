$(function () {

	$('.tombolTambahSubMenu').on('click', function (event) {
		event.preventDefault();
		// location.reload();
		$('#formModalLabel2').html('Tambah Sub Menu Baru');
		$('.modal-footer button[type=submit]').html('Tambah Sub Menu');
		$('.modal-body form').attr('action', 'http://localhost/codeigniter-login/menu/submenu');
		$('#title').val('');
		$('#menu').val('');
		$('#url').val('');
		$('#icon').val('');
	});

	$('.tampilModalUbahSubMenu').on('click', function (event) {
		event.preventDefault();
		$('#formModalLabel2').html('Ubah Sub Menu');
		$('.modal-header button[type=button]').on('click', function (event) {
			event.preventDefault();
			setTimeout(function () {
				location.reload();
			}, 500);
		});
		$('.modal-footer button[type=submit]').html('Ubah Sub Menu');
		$('.modal-footer button[type=button]').on('click', function (event) {
			event.preventDefault();
			setTimeout(function () {
				location.reload();
			}, 500);
		});
		$('.modal-body form').attr('action', 'http://localhost/codeigniter-login/menu/ubahsubmenu');
		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/codeigniter-login/menu/getubahsubmenu',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				// console.log(data);
				$('#id').val(data.id);
				$('#title').val(data.title);
				$('#menu_id').val(data.menu_id);
				$('#url').val(data.url);
				$('#icon').val(data.icon);
				$('#is_active').val(data.is_active);
			}
		});
	});


});
