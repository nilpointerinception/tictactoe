$(function() {
	adjustBoxes();
	$(window).resize(function() {
		adjustBoxes();
	});
});

function adjustBoxes() {
	var w = $(".game-box").first().width();
	$(".game-box").each(function() {
		$(this).css("height", w+"px");
		$(this).find(".outer").css("height", w+"px").css("width", w+"px");
	});
}
