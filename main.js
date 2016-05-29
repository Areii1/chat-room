fetchMessages();
setInterval(fetchMessages, 2000);

function fetchMessages() {
	$.ajax({
		url: 'backend/chat-messages.php',
		success: function(response) {
			var parsedResponse = JSON.parse(response);
			renderMessages(parsedResponse);
			scrollChatAreaDown();
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
	var message = $('#message').val();
	var sender = $('#sender').val();
	$.ajax({
		url: 'backend/insert-message.php',
		type: 'POST',
		data: {
			sender: sender,
			message: message 
		},
		success: function(response) {
			console.log(response);
			$("#message").val('');
			fetchMessages();
		}
	});
});

function scrollChatAreaDown() {
	var height = 0;
	$('ul li').each(function(i, value){
	    height += parseInt($(this).height());
	});

	height += '';

	$('ul').animate({scrollTop: height});
}