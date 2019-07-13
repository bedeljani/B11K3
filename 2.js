function validateUsername(username){
	var userRgx = /^[a-zA-Z0-9]{5,9}$/i;
	return userRgx.test(username);

	}
function validatePassword(password){
	var userRgx = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!$%^&*-])(?=.*?[\@]).{8,}$/;
	return userRgx.test(password);

	}

	if (validateUsername("Ayu99v")) {
		if(validatePassword("p@ssW0rd#")){
		alert("Password Is Valid") ;		
		}else{
			alert("Password Is InValid") ;
		}
    alert("Username Is Valid") ;
} else {
    alert("Username Is Invalid") ;
}


	