$(document).ready(() => {
	$data = "";

	$.ajax({
		url: base_url + "User/json",
		type: "post",
		dataType: "json",
		success: (result) => {
			$data = result;
		},
		error: (jqXHR, textStatus, errorThrown) => {
			console.log(textStatus, errorThrown);
		},
	});

	$("#detailPantai").click(() => {
		$t = $(this).text();
		// $("#isi").load(base_url + "User/indexDetailObwisUser");
		console.log($t);
	});
});
