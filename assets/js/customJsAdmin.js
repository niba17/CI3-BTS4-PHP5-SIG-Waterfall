$(document).ready(() => {
	//SidebarUser
	// $("#beranda").addClass("active");

	$("#accordionSidebar").click(() => {
		$(".nav-item").removeClass("active");
		$(this).addClass("active");
	});

	$("#beranda").click((e) => {
		$("#isi").load(base_url + "/Admin/indexBerandaAdmin2");
		e.preventDefault();
	});

	$("#profil").click((e) => {
		$("#isi").load(base_url + "/Admin/indexProfilAdmin");
		e.preventDefault();
	});

	// $("#obWis").click((e) => {
	// 	$("#isi")
	// 		.empty()
	// 		.load(base_url + "/Admin/indexObWisAdmin");
	// 	e.preventDefault();
	// });

	$("#fasTam").click((e) => {
		$("#isi").load(base_url + "/Admin/indexFasTamAdmin");
		e.preventDefault();
	});

	$("#peta").click((e) => {
		$("#isi").load(base_url + "/Admin/indexPetaAdmin");
		e.preventDefault();
	});

	$("#hubungi").click((e) => {
		$("#isi").load(base_url + "/Admin/indexHubungiAdmin");
		e.preventDefault();
	});
	// End Sidebar Admin
});
