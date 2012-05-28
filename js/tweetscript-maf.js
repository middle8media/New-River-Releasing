$(document).ready(function(){
	
	// Using our tweetAction plugin. For a complete list with supported
	// parameters, refer to http://dev.twitter.com/pages/intents#tweet-intent
	
	$('#tweetLink').tweetAction({
		text:		'Visit New River, a web based motion picture studio & subscribe for FREE swag. #indiefilm #ncfilm #MAF ',
		url:		'http://cl.ly/FKn1',
		via:		'NewRiver_NC',
		related:	'middle8media'
	},function(){
		
		// When the user closes the pop-up window:
		
		$('a.downloadButton')
				.addClass('active')
				.attr('href','../movies-among-friends');

	});
	
});