$.ajax({
	url: 'chat-messages.php',
	success: function(response) {
		console.log(JSON.parse(response));

	}
});

