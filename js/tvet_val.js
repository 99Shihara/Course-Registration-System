function validateSoureCode() {
    var sc_format = /^[A-Z]{1}[0-9]{2}$/;
    var sc = document.getElementById("code");
    var msg = document.getElementById("errorSC");

    if (sc.value === "") {
        msg.innerHTML = "Please enter sector code";
        return false;
    }
    if (!sc.value.match(sc_format)) {
        msg.innerHTML = "Please Enter Validate Sector Code Format <br> eg : A01";
        return false;
    }
    msg.innerHTML = "Sector code accepted";
    return true;
}

function validateDesc() {
    var des_format = /^[A-Za-z ]+$/;
    var des = document.getElementById("des");
    var msg = document.getElementById("errorDes");

    if (des.value === "") {
        msg.innerHTML = "Please enter description";
        return false;
    }
    if (!des.value.match(des_format)) {
        msg.innerHTML = "Only accepting letters";
        return false;
    }
    msg.innerHTML = "Description accepted";
    return true;
}


