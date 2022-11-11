$(document).ready(() => {
	$data = "";

	// $.ajax({
	// 	url: base_url + "User/json",
	// 	type: "post",
	// 	dataType: "json",
	// 	success: (result) => {
	// 		$data = result;
	// 	},
	// 	error: (jqXHR, textStatus, errorThrown) => {
	// 		console.log(textStatus, errorThrown);
	// 	},
	// });

	//SidebarUser
	// $("#beranda").addClass("active");

	$("#accordionSidebar").click((e) => {
		$(".nav-item").removeClass("active");
		$(this).addClass("active");
	});

	$("#beranda").click((e) => {
		$("#isi").load(base_url + "/User/indexBerandaUser2");
		e.preventDefault();
	});

	$("#profil").click((e) => {
		$("#isi").load(base_url + "/User/indexProfilUser");
		e.preventDefault();
	});

	// $("#obWis").click((e) => {
	// 	$("#isi")
	// 		.empty()
	// 		.load(base_url + "/User/indexObWisUser");
	// 	e.preventDefault();
	// });

	$("#fasTam").click((e) => {
		$("#isi").load(base_url + "/User/indexFasTamUser");
		e.preventDefault();
	});

	$("#peta").click((e) => {
		$("#isi").load(base_url + "/User/indexPetaUser");
		e.preventDefault();
	});

	$("#hubungi").click((e) => {
		$("#isi").load(base_url + "/User/indexHubungiUser");
		e.preventDefault();
	});

	$("#login").click((e) => {
		$("#isi").load(base_url + "/User/indexLogin");
		e.preventDefault();
	});
	//End Sidebar User
});
