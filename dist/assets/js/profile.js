$.fn.makebar = function(){
	var _this = $(this);
	var _value = _this.data("bar");
	var _max = _this.data("barMax");
	var _percent = (_value / _max) * 100;
	var _barInner = $("<div class='bar-inner'></div>");
	_this.append( _barInner );
	_barInner.css({
		width: _percent + "%"
	});
};
$(function(){
	$(".basic-bar").makebar();
});