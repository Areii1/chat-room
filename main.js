var form = document.getElementById('text-input');
form.addEventListener('submit', function(e) {
	e.preventDefault();
	var comment = document.getElementsByName('comment')[0].value;
	document.getElementById('text-output').innerHTML = comment;
});