function cek_stock(){
	$.ajax({
		url: "http://"+location.hostname+"/loginpos7/notif/stock_min",
		cache: false,
		success: function(response){
			pecah = response.split("|");
			$(".cek-stock").text(pecah[0]);
			$("li .header").text(pecah[1]);
			$("#detail_reminder").html(pecah[2]);
			$("li .footer").html(pecah[3]);
			//alert(pecah[0]);
		},
		error: function(xhr, status, error){
			alert(xhr.responseText);
		}
	});
	var timer = setTimeout("cek_stock()",120000);
}
$(document).ready(function(){
	cek_stock();
});