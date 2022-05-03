function checkPswd() {
    var confirmPassword = "admin";
    var password = document.getElementById("pswd").value;
    if (password == confirmPassword) {
         window.location="displaydata.php";
    }
    else{
        alert("Passwords do not match.");
    }
}