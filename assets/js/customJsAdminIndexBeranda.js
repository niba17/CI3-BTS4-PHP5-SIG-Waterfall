$(document).ready(function () {
	// console.log("ready");
	$("#detailPantai").click((e) => {
		$("#isi").load(base_url + "/Admin/indexDetailObwisAdmin");
		e.preventDefault();
	});
});
