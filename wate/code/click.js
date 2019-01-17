function freeInputLink(){
	var input = document.getElementById("entre");	
	var inputText = input.value;
	
	var projet = "chaine";
		
	// pourquoi je n'ai pas de warning
	// if (entre > "700") projet = "cdp";
	// déclaration de variable js
	// le typage aussi
	
	if (inputText > "700") projet = "cdp";
		
	var url = "https://jira.els-gestion.eu/browse/sie" + projet + "-" + inputText;
	
	console.log(url);
	window.open(url,"_blank");
}