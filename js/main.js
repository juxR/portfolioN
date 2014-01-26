;(function( $ ){
	var $value,
	$showType,
	$nImage;

	$(function(){
		$('.comment-reply-link').on('click',function( e ){
			e.preventDefault();
			var mouseX = e.pageX;
			var mouseY = e.pageY;
			$id = $(this).parent().parent().parent().attr('data-id');
			console.log($('.formRep #comment_parent').val($id));
			$('.formRep').fadeIn().end().css({'top':mouseY});
		});
		$('a[rel="external"').attr('target','_new');
		$('.menuToggle').on('click',openMenu);
		$('.delete').on('click',function( e ){
			$(this).parent().parent().fadeOut('fast');
		});

		$('.tri a').on("click", function( e ){
			$value = $(this).html()
			e.preventDefault();
			if($value ==="Web")
			{
				$('.tri li.printt').removeClass('active');
				$('.tri li.toutt').removeClass('active');

				$(this).parent('li').addClass('active');

				$('.print.triage').parent('.p').fadeOut();
				$('.print.triage').parent('.p').removeClass('show');
				$('.web.triage').parent('.p').removeClass('show').addClass('show');
				
				$('.web.triage').parent('.p').fadeIn();
				
				$('.show:nth-child(odd)').addClass('impair');
				$('.show:nth-child(even)').removeClass('impair');
			}
			else if($value ==="Print")
			{
				$('.tri li.webt').removeClass('active');
				$('.tri li.toutt').removeClass('active');

				$(this).parent('li').addClass('active');
				
				$('.web.triage').parent('.p').removeClass('show');
				$('.web.triage').parent('.p').fadeOut('fast',function(){

					$('.print.triage').parent('.p').removeClass('show').addClass('show');
				});
				


				$('.print.triage').parent('.p').fadeIn();

				$('.show:nth-child(odd)').addClass('impair');
				$('.show:nth-child(even)').removeClass('impair');
			}
			else if($value ==="Tout")
			{
				$('.tri li.webt').removeClass('active');
				$('.tri li.printt').removeClass('active');

				$(this).parent('li').addClass('active');

				$('.web.triage').parent('.p').removeClass('show').addClass('show');
				$('.print.triage').parent('.p').removeClass('show').addClass('show');

				$('.print.triage').parent('.p').fadeIn();
				
				$('.web.triage').parent('.p').fadeIn();

				$('.show:nth-child(even)').addClass('impair');
				$('.show:nth-child(odd)').removeClass('impair');
			}
			
		});
});
var openMenu = function( e ){
	e.preventDefault();
	console.log('open');
}


}).call(this, jQuery);
