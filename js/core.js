$(function() {

	adjustBoxes();

	$(window).resize(function() {
		adjustBoxes();
	});

});

function adjustBoxes() {
	$(".game-box").each(function() {
		var w = $(this).width();
		$(this).css("height", w+"px");
		$(this).find(".outer").css("height", w+"px").css("width", w+"px");
	});
}