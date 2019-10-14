// Function Validating Login
function validateLogin() {
    var user = document.getElementById("userID");
    var pass = document.getElementById("passID");
    if(user.value == "" || pass.value == ""){
    alert("Fields cannot be blank.");
    return false;
    }
    return true;
    }

// Function Validating Register    
function validateRegister() {
    var user = document.getElementById("reguserID");
    var email = document.getElementById("regemailID");
    var pass = document.getElementById("regpassID");
    var conpass = document.getElementById("regconpassID");
    if(user.value == "" || email.value == "" || pass.value == "" || conpass.value == ""){
        alert("Fields cannot be blank.");
        return false;
    }else if(pass.value != conpass.value){
        alert("Passwords are not match");
        return false;
    }
    return true; 
}

// Function Validating Contact
function validateContact() {
    var fullname = document.getElementById("fullnameID");
    var email = document.getElementById("emailID");
    var message = document.getElementById("messageID");
    if(fullname.value == "" || email.value == "" || message.value == ""){
        alert("Fields cannot be blank.");
        return false;
    }
    return true;
}

