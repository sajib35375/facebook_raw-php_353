(function($){
	$(document).ready(function(){


		$(document).on('change','input#photo_load',function (e){
			e.preventDefault();

			let image_url = URL.createObjectURL(e.target.files[0]);
			$('img#profile_image_loader').attr('src', image_url);
		});

		
	});
})(jQuery)