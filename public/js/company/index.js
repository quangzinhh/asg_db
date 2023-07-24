$("#tab-company")
	.DataTable({
		// dom: "Bfrtip", //Thêm dom vào thì nó sẽ hiện đồng thời giữa language và bottom
		responsive: true,
		lengthChange: false,
		autoWidth: false,
		language: {
			url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Vietnamese.json",
		},
	})

$(".btn-edit").click(function (e) {
	var id = $(this).data("id");
	var name = $(this).data("name");
	var address = $(this).data("address");
	// console.log(id, name, address);
	$("#EditCompanyModal input[name='id']").val(id);
	$("#EditCompanyModal input[name='name']").val(name);
	$("#EditCompanyModal input[name='address']").val(address);
	$('#EditCompanyModal').modal('show');
})

$(".btn-delete").click(function (e) {
	var id = $(this).data("id");
	$("#DeleteCompanyModal input[name='id']").val(id);
	$('#DeleteCompanyModal').modal('show');
})