$.ajax({
	url: 'chat-messages.php',
	success: function(response) {
		renderMessage(JSON.parse(response));
	}
});

function renderMessage(response) {
	for (var i = 0; i < response.length; i++) {
		var time = response[i].time;
		var sender = response[i].sender;
		var content = response[i].content;

		var message = document.createElement('li');
		message.innerHTML = time + ' - ' +  sender + '  -  ' + content;
		document.getElementById('chat-area').appendChild(message);
	}
}