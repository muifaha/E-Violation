$(document).ready(function() {
	var table = $('#example').DataTable({
		dom: 'Bfrtip',
		responsive: true,
		buttons: [{
				extend: 'colvis',
				text: 'Column Visibility',
				columns: function(idx, data, node) {
					var arr = [0, 1];
					if (arr.indexOf(idx) !== -1) {
						return false;
					} else {
						return $('#example').DataTable().column(idx).visible();
					}
				}
			},
			{
				extend: 'collection',
				text: 'Export',
				buttons: [{
						extend: 'copyHtml5',
						exportOptions: {
							columns: function(idx, data, node) {
								var arr = [0, 1];
								if (arr.indexOf(idx) !== -1) {
									return false;
								} else {
									return $('#example').DataTable().column(idx).visible();
								}
							}
						}
					},
					{
						extend: 'excelHtml5',
						exportOptions: {
							columns: function(idx, data, node) {
								var arr = [0, 1];
								if (arr.indexOf(idx) !== -1) {
									return false;
								} else {
									return $('#example').DataTable().column(idx).visible();
								}
							}
						}
					},
					{
						extend: 'pdfHtml5',
						exportOptions: {
							columns: function(idx, data, node) {
								var arr = [0, 1];
								if (arr.indexOf(idx) !== -1) {
									return false;
								} else {
									return $('#example').DataTable().column(idx).visible();
								}
							}
						}
					}
				]
			}
		]
	});
});