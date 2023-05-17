function sendReply(id,msg){
	const xhttp = new XMLHttpRequest();
	/*xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("demo").innerHTML = this.responseText;
		}
	};*/
	xhttp.open("GET", "?reply=" + msg + "&to=" + id, true);
	xhttp.send();
	location.reload();
}

function rate(id,rating){
	const xhttp = new XMLHttpRequest();
	
	xhttp.open("GET", "?rate=" + rating + "&to=" + id, true);
	xhttp.send();
	xhttp.open("GET", "?getRates&of=" + id, true);
}