var form = document.getElementById('text-input');
form.addEventListener('submit', function(e) {
	e.preventDefault();
	var comment = document.getElementsByName('comment')[0].value;
	var pElement = document.createElement('p');
	pElement.innerHTML = comment;
	document.getElementById('chat-area').appendChild(pElement);
});