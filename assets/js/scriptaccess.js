$('.access-input').on('click', function () {
	const menuId = $(this).data('menu');
	const roleId = $(this).data('role');

	$.ajax({
		url: 'http://localhost/codeigniter-login/admin/changeaccess',
		type: 'post',
		data: {
			menuId: menuId,
			roleId: roleId
		},
		success: function () {
			document.location.href = 'http://localhost/codeigniter-login/admin/roleaccess/' + roleId;
		}
	});
});
