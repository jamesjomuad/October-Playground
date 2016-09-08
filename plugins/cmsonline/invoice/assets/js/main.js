function refresh(){
	var ids = [];

	$('tbody tr [data-title="ID"]').each(function(){
		ids.push( parseInt($.trim($(this).text())) );
	});

	$.request('onRefresh', {
		data: {
			lastID: Math.max.apply(Math,ids)
		},
		success:function(data){
			console.log(data);
		}
	});
};
