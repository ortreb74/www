function gotToBitbucket(){
	alert("click");
	
	var input = document.getElementById("entre");	
	var inputText = input.value;
	
	console.log("InputText : " + inputText);
	
	var url = "https://bitbucket.org/elsgestion/sie-efl-" + inputText;
	
	console.log(url);
	window.open(url,"_blank");	
}

