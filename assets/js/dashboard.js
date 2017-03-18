$(function() { 
	var HTTPHOST = $(location).attr('protocol') + '//' + $(location).attr('host') + $(location).attr('pathname') +'/';
	
	// Data Lists
	$.get(HTTPHOST + 'ajaxGetList/', function(o) {
		// console.log(o[0].text);
		if(o != 0) {
			for(var i = 0;i < o.length;i++) {
				$('#listInsert').append('<tr><td><a rel="' + o[i].id + '" class="btn-delete btn btn-danger"><i class="fa fa-fw fa-trash"></i></a></td><td>' + o[i].id + '</td><td>' + o[i].text + '</td></tr>');
			}
		} else {
			$('#listInsert').append('<tr id="listError"><td colspan="3" class="text-center"><strong class="text-primary align-center">No Data Found!</strong></td></tr>');
		}
	}, 'json');

	// randomInsert Submit
	$('#randomInsert').on('submit', function() {

		// Serialize Form Data
		var row	= $(this).serialize(),
			url	= $(this).attr('action');

		$.post(url, row, function(o) {
			$('#listError').remove();
			$('#listInsert').prepend('<tr><td><a rel="' + o.id + '" class="btn-delete btn btn-danger"><i class="fa fa-fw fa-trash"></i></a></td><td>' + o.id + '</td><td>' + o.text + '</td></tr>');
			$('#randomInsert')[0].reset();

		}, 'json');
		return false;
	});

	$('#listInsert').on('click', '.btn-delete', function() {
		var id = $(this).attr('rel'), deleteList = $(this);
		$.post(HTTPHOST + 'ajaxDeleteList/', {'id': id}, function(o) {
			deleteList.parent().parent().remove();
		});
		return false;
	});
});