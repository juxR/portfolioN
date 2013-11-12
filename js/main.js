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
				console.log(this);
				console.log($value);
				$('.print.triage').parent('.p').css({
					opacity: 0,
					transition:"all 0.5s ease"
				}).delay(300).fadeOut();
				$('.print.triage').removeClass('active');

				$('.web.triage').parent('.p').css({
					opacity: 1,
					transition:"all 0.5s ease"
				}).delay(300).fadeIn();
				$(this).parent('li').addClass('active');
			}
			else if($value ==="Print")
			{
				$('.web.triage').parent('.p').css({
					opacity: 0,
					transition:"all 0.5s ease"
				}).delay(300).fadeOut();
				$(this).removeClass('active');

				$('.print.triage').parent('.p').css({
					opacity: 1,
					transition:"all 0.5s ease"
				}).delay(300).fadeIn();
				$(this).parent('li').addClass('active');
			}
			else if($value ==="Tout")
			{
				$('.print.triage').parent('.p').css({
					opacity: 1,
					transition:"all 0.5s ease"
				}).delay(300).fadeIn();
				
				$('.web.triage').parent('.p').css({
					opacity: 1,
					transition:"all 0.5s ease"
				}).delay(300).fadeIn();

				$(this).addClass('active');
			}
			console.log($nImage = $('.p').length);
			
		});
		if($nImage % 2){
			this.removeClass().addClass('p pair');

		}
	});
	

}).call(this, jQuery);
