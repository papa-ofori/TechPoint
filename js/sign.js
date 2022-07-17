function validate() {
    // checking and wrong for empty feilds in first name  
    let fnameTest = document.myForm.fname.value.search(/^[a-zA-Z]{4,}(?: [a-zA-Z]+)?(?: [a-zA-Z]+)?$/)
    if (document.myForm.fname.value == "" || fnameTest == -1) {
    	alert("First name can only contain alphabets and spaces");
    	document.myForm.fname.focus();
    	return false;
    }



    // checking and wrong for empty feilds in last name  
    let lnameTest = document.myForm.lname.value.search(/^[a-zA-Z]{4,}(?: [a-zA-Z]+)?(?: [a-zA-Z]+)?$/)
    if (document.myForm.lname.value == "" || lnameTest == -1) {
    	alert("Last name can only contain alphabets and spaces");
    	document.myForm.lname.focus();
    	return false;
    }



	// validate email
    // checking and wrong for empty feilds in email 
    let emailTest = document.myForm.uemail.value.search(/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/)
    if (document.myForm.uemail.value == "" || emailTest == -1) {
    	alert("Enter a valid email!");
    	document.myForm.uemail.focus();
    	return false;
    }




	// validate password
	let passwordTest = document.myForm.upass1.value.search(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/)
	if (document.myForm.upass1.value == "" || document.myForm.upass.value != document.myForm.upass1.value) {
		alert("Password doesn't match");
		document.myForm.upass1.focus();
		return false;
	}

	// validate country
    if (document.myForm.country.value == "-1") {
        alert("Please provide your country!");
        return false;
    }


	 //city
	 let cityTest = document.myForm.cty.value.search(/^[a-zA-Z]+$/)
	 if (document.myForm.cty.value == "" || cityTest == -1) {
	 	alert("City must be letters only");
	 	document.myForm.cty.focus();
	 	return false;
	 }

	//contact
	let contactTest = document.myForm.phn.value.search(/^\d{10}$/)
	if (document.myForm.phn.value == "" || contactTest == -1) {
		alert("Contact must be digits only");
		document.myForm.phn.focus();
		return false;
	}
    return (true);

}