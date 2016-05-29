fetchMessages();
setInterval(fetchMessages, 5000);

function fetchMessages() {
	$.ajax({
		url: 'chat-messages.php',
		success: function(response) {
			var parsedResponse = JSON.parse(response);
			renderMessages(parsedResponse);
		}
	});
}

function renderMessages(messages) {	
	$('#chat-area').empty();
	for (var i = 0; i < messages.length; i++) {
		var time = messages[i].time;
		var sender = messages[i].sender;
		var content = messages[i].content;

		var $message = $('<li>');
		$message.html(time + ' - ' +  sender + '  -  ' + content);
		$("#chat-area").append($message);
	}
}

$('#message-form').submit(function(e) {
	e.preventDefault();
	var message = $('#comment').val();
	console.log(message);
});