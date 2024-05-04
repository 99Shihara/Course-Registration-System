function userNameValidate() {
    var uname_format = /^([A-Z]{1}[a-z ]*)+$/;
    var uname = document.getElementById("userName");
    var msg = document.getElementById("errorUN");

    if (uname.value === "") {
        msg.style.color = "red";
        msg.innerHTML = "Please enter user name";
        return false;
    }
    if (!uname.value.match(uname_format)) {
        msg.style.color = "red";
        msg.innerHTML = "Please Enter Validate Name Format <br> eg : Tishan";
        return false;
    }
    msg.innerHTML = "User name accepted";
    msg.style.color = "green";
    return true;
}

function passwordValidation() {
    var pswd_format = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var pswd = document.getElementById("password");
    var msg = document.getElementById("errorPswd");
    var outputErrorMsg = "";

    if (pswd.value === "") {
        msg.style.color = "red";
        msg.innerHTML = "Please enter valid password";
        return false;
    }
    if (!pswd.value.match(pswd_format)) {
        //validate length
        if (pswd.value.length < 8) {
            outputErrorMsg = "* Be at least 8 characters <br>";
        }
        //validate lowercase letter
        if (!pswd.value.match(/[a-z]/)) {
            outputErrorMsg += "* At least one lowercase letter <br>";
        }
        //validate uppercase letter
        if (!pswd.value.match(/[A-Z]/)) {
            outputErrorMsg += "* At least one uppercase letter <br>";
        }
        //validate number
        if (!pswd.value.match(/[0-9]/)) {
            outputErrorMsg += "* At least one number <br>";
        }
        //validate special character
        if (!pswd.value.match(/[@$!%*?&]/)) {
            outputErrorMsg += "* At least one special character <br>";
        }
        msg.style.color = "red";
        msg.innerHTML = outputErrorMsg;
        return false;
    }
    msg.innerHTML = "Password accepted";
    msg.style.color = "green";
    return true;
}

function conPswdValidate() {
    var pswd = document.getElementById('password');
    var conPswd = document.getElementById('confirmPwrd');
    var msg = document.getElementById('errorConPswd');

    if (pswd.value !== conPswd.value) {
        msg.innerHTML = "Password not matched.";
        msg.style.color = "red";
    } else {
        msg.innerHTML = "Password matched.";
        msg.style.color = "green";
    }
}

function addressValidate() {
    var address = document.getElementById("address");
    var msg = document.getElementById("errorAddress");

    if (address.value === "") {
        msg.style.color = "red";
        msg.innerHTML = "Please enter address";
        return false;
    }
    msg.innerHTML = "";
    return true;
}

function emailValidate() {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)+$/;
    var email = document.getElementById("email");
    var msg = document.getElementById("errorEmail");

    if (email.value === "") {
        msg.style.color = "red";
        msg.innerHTML = "Please enter email address";
        return false;
    }
    if (!email.value.match(mailformat)) {
        msg.style.color = "red";
        msg.innerHTML = "Please Enter Valide email. <br> ex : tishan@gmail.com";
        return false;
    }
    msg.innerHTML = "Email accepted";
    msg.style.color = "green";
    return true;
}

function validateGender() {
    var rdBtnsGender = document.getElementsByName('gender'); // radio button group ekak karanna api ekama name eka use karamu nisa name eken radio button tika select kara gannawa
    var msg = document.getElementById('errorGender'); // error msg eka display karanna oni karana elemetn eka select kara gnnawa

    // radio buton tika check welada kiyala methanin check karanne
    var isChecked = false; // palleha for ekata ynna kalin api ischecked kiyana eka default widihata false karala thiya gnnawa.
    for (var i = 0; i < rdBtnsGender.length; i++) { // me for loop eken thamai radio buttons checked welada kiyla blnne.
        if (rdBtnsGender[i].checked) { // ekama name ekan radio button thiyena nisa eka array ekak wage. e nisa api radio button deka wena wenama select kara gnne index eka dila. index eka for loop eke i eken hadala denawa.
            isChecked = true; // dn radio button eka checked wela nm ischecked kiana eka true karanawa.
            break; // break eken me part eka run wena eka nawathinawa
        }
    }
    // checked wela nathnm error msg ekak denawa
    if (!isChecked) {
        msg.innerHTML = "Please select gender"; // api uda asign kara gaththa error msg eka display karana elemetn ekata meka yawanaw
        msg.style.color = "red"; // elelement eke color eka red karanawa
        return false;
    }
    // check wela nm error msg eka empty
    msg.innerHTML = "";
    return true;
}



function validate() {
    return userNameValidate() && passwordValidation() && addressValidate() && emailValidate() && validateGender();
}



