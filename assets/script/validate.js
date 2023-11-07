function validate(){
	errormsg = "";

	// store values names
	name = document.forms[0].name.value;
	email = document.forms[0].email.value;
	partySize = document.forms[0].partySize.value;
	visitDate = document.forms[0].visitDate.value;
	location = ""; // radios must be validated before the value is set 
	comment = document.forms[0].comment.value;

	// check if empty 
	if(name == ""){
		errormsg += "Fill in an entry for name\n";
	}
	if(email == ""){
		errormsg += "Fill in an entry for email\n";
	}
	if(partySize == ""){
		errormsg += "Fill in an entry for party size\n";
	}
	if(visitDate == ""){
		errormsg += "Fill in an entry for date\n";
	}

	// check if radio has been selected 
	if(document.getElementById("burger").checked == false &&
		document.getElementById("pizzeria").checked == false &&
		document.getElementById("mikes").checked == false &&
		document.getElementById("artMuseum").checked == false &&
		document.getElementById("scienceMuseum").checked == false &&
		document.getElementById("aquarium").checked == false &&
		document.getElementById("duck").checked == false &&
		document.getElementById("newbury").checked == false &&
		document.getElementById("common").checked == false &&
		document.getElementById("none").checked == false )
	{
		errormsg += "Select an intriguing location\n";
	}
	else{
		location = document.forms[0].location.value;
	}

	if(comment == ""){
		errormsg += "Fill in an entry for comment\n";
	}

	// return 
	if(errormsg != ""){
        alert(errormsg);
        return false;
    }
    else{
    	return true;
    }

}