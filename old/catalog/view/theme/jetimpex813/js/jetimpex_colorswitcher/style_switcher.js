;(function ($) {
	$(document).ready(function(){
		var theme = $('#gl_path').text(),
		el, scheme, switcher = '#style_switcher';
		$('#style_switcher .toggler').on('click', function(){
			$(this).parent().toggleClass('shown');
		});
		$('body').on('click', function(e){
			if (!$(e.target).is(switcher) && $(e.target).parents(switcher).length === 0 && $(switcher).hasClass('shown')) {
				$(switcher).removeClass('shown');
			}
		});
		$('.color_scheme').on('click', function(){
			scheme = $(this).data('scheme');
			el = $(this);
			$.ajax({
				url: 'index.php?route=extension/module/jetimpex_color_switcher/updateSchame',
				type: 'post',
				dataType: 'json',
				data: 'module_jetimpex_color_switcher_scheme=' + scheme,
				success: function(json) {
					if($('link#color_scheme').length) {
						$('link#color_scheme').attr({href: 'catalog/view/theme/' + theme + '/stylesheet/color_schemes/' + scheme + '.css'});
					}
					else{
						$('body').append('<link id="color_scheme" rel="stylesheet" href="catalog/view/theme/' + theme + '/stylesheet/color_schemes/' + scheme +'.css">');
					}
					$('#color-box li').removeClass('active');
					el.closest('li').addClass('active');
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		});
	});
})(jQuery);