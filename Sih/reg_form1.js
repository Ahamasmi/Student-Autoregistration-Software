
function checkEmpty(variable) {
	if(variable.value.length != 0) {
		variable.readOnly = true;
    }
}

function formValidation() {
    
    var fname = document.getElementById('fatherName');
    var mname = document.getElementById('motherName');    
    var gender = document.getElementById('gender');
    var cat = document.getElementById('category');
    var cont = document.getElementById('contactNo');
    var altCont = document.getElementById('altContactNo');
    var email = document.getElementById('emailId');
    var aadhar = document.getElementById('aadhar');
    var address = document.getElementById('address');
    var tenPercentage = document.getElementById('tenP');
    var twelevePercentage = document.getElementById('twelveP');

    if(
    nameValidator(fname) == true
    &&nameValidator(mname) == true&&

    numberValidator(cont)== true&&
    numberValidator(altCont)== true&&

    emailValidator(email)== true&&

    aadharValidator(aadhar)== true&&

    addressValidator(address)== true&&
    percentValidator(tenPercentage)==true&&
    percentValidator(twelevePercentage)==true)
    {
		return true;
    }
	
        return false;
}

function nameValidator(name) {
    var pattern = /^[a-zA-Z\s]+$/;
    if(pattern.test(name.value) == true && name.value.length <=100){
        return true;   
    }
    else {
        name.style.backgroundColor='red';
        return false;
    }
}

function numberValidator(num) {
    var pattern =  /^\(?([7-9]{1})\)?([0-9]{9})+$/;
    if(pattern.test(num.value) == true && num.value.length == 10) {
        return true;   
    }
    else {
        num.style.backgroundColor='red';
        return false;
    }
}




function emailValidator(email) {
    var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(pattern.test(email.value) == true) {
        return true;   
    }
    else {
        email.style.backgroundColor='red';
        return false;
    }
}

function aadharValidator(aadhar) {
    var pattern = /^[0-9]+$/;
    if(pattern.test(aadhar.value) == true && aadhar.value.length == 12) {
        return true;   
    }
    else {
        aadhar.style.backgroundColor='red';
        return false;
    }

}

function addressValidator(address) {
    var pattern = /^[0-9a-zA-Z\s]+$/;
    if(pattern.test(address) == true) {
        return true;   
    }
    else {
        address.style.backgroundColor='red';
        return false;
    }

}

function percentValidator(Percentage) {
    if(Percentage.length >=2 && Percentage.value < 100 && Percentage.value > 0)
        return true;
    else
        return false;
}
