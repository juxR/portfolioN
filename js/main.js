;(function( $ )
{
	var $value,
	$showType,
	$nImage;

	$(function(){

		$('.tri a').on("click", function( e ){
			$value = $(this).html()
			e.preventDefault();
			if($value ==="Web")
			{

				$('.tri li.printt').removeClass('active');
				$('.tri li.toutt').removeClass('active');

				$(this).parent('li').addClass('active');

				$('.print.triage').parent('.p').css({
					opacity: 0,
					transition:"all 0.5s ease"
				}).fadeOut();
				$('.print.triage').parent('.p').removeClass('show');
				$('.web.triage').parent('.p').removeClass('show').addClass('show');
				$('.web.triage').parent('.p').css({
					opacity: 1,
					transition:"all 0.5s ease"
				}).fadeIn();
				$('.show:nth-child(odd)').addClass('impair');
				$('.show:nth-child(even)').removeClass('impair');
			}
			else if($value ==="Print")
			{
				$('.tri li.webt').removeClass('active');
				$('.tri li.toutt').removeClass('active');

				$(this).parent('li').addClass('active');

				$('.web.triage').parent('.p').css({
					opacity: 0,
					transition:"all 0.5s ease"
				}).delay(100).fadeOut();
				$('.web.triage').parent('.p').removeClass('show');
				$('.print.triage').parent('.p').removeClass('show').addClass('show');


				$('.print.triage').parent('.p').css({
					opacity: 1,
					transition:"all 0.5s ease"
				}).fadeIn();

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

				$('.print.triage').parent('.p').css({
					opacity: 1,
					transition:"all 0.5s ease"
				}).fadeIn();
				
				$('.web.triage').parent('.p').css({
					opacity: 1,
					transition:"all 0.5s ease"
				}).fadeIn();

				$('.show:nth-child(even)').addClass('impair');
				$('.show:nth-child(odd)').removeClass('impair');
			}
			
		});
});


}).call(this, jQuery);
