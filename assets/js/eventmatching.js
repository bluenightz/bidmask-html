$(function(){
	$(".booth__list").on("click", "input[type='checkbox']", function(e){
		var li = $(this).closest("li");
		li.toggleClass("active");
	});
});