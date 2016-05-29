$.ajax({
	url: 'chat-messages.php',
	success: function(response) {
		renderMessage(JSON.parse(response));
	}
});

function renderMessage(response) {
	console.log(response[0].content);
	for (var i = 0; i < response.length; i++) {
		var time = response[i].time;
		var sender = response[i].sender;
		var content = response[i].content;

		var liElement = document.createElement('li');
		liElement.innerHTML = response[i].content;
		document.getElementById('chat-area').appendChild(liElement);
	}
}