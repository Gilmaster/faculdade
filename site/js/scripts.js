function validateForm() {

    if (document.getElementById("name").value == "") {
        alert('Favor preencher os campos Corretamente');
        document.getElementById("name").focus();
        return false;
    }
    if (document.getElementById("email").value == "") {
        alert('Favor preencher os campos Corretamente');
        document.getElementById("email").focus();
        return false;
    }
    if (document.getElementById("phone").value == "") {
        alert('Favor preencher os campos Corretamente');
        document.getElementById("phone").focus();
        return false;
    }
    if (document.getElementById("textarea").value == "") {
        alert('Favor preencher os campos Corretamente');
        document.getElementById("textarea").focus();
        return false;
    }
return true;
}