jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
	$('.misha_loadmore').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': posts_myajax,
			'page' : current_page_myajax,
		};
 
		$.ajax({ // you can also use $.post here
			url : '/wp-admin/admin-ajax.php',  // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) {
					const value = data.slice(0, data.length - 1)
					button.text( 'More posts' ).parent().before(value); // insert new posts
					current_page_myajax++;
 
					if ( current_page_myajax == max_pages_myajax ) {
						button.remove(); // if last page, remove the button
					} 
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});