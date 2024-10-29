(function($){

	jQuery(document).ready(function(){


		jQuery(window).scroll(function(){
			if(jQuery(window).scrollTop() > 200){
				jQuery(".scrolltotop a i").show();
			}else{
				jQuery(".scrolltotop a i").hide();
			}
		});

		



		jQuery(".scrolltotop a").on('click', function(){
			
			jQuery("html, body").animate({'scrollTop' : 0}, 1000);

			return false;
		});
	});


	


}(jQuery));