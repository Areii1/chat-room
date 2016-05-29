fetchMessages();
setInterval(fetchMessages, 5000);

function fetchMessages() {
	$.ajax({
		url: 'chat-messages.php',
		success: function(response) {
			renderMessages(JSON.parse(response));
		}
	});
}

function renderMessages(messages) {
	for (var i = 0; i < messages.length; i++) {
		var time = messages[i].time;
		var sender = messages[i].sender;
		var content = messages[i].content;

		var $message = $('<li>');
		$message.html(time + ' - ' +  sender + '  -  ' + content);
		$("#chat-area").append($message);
	}
}