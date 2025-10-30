function rValidate() {
    var names   = document.getElementById('fname').value.trim();
    var email   = document.getElementById('femail').value.trim();
    var phone   = document.getElementById('fphone').value.trim();
    var type    = document.getElementById('ftype').value.trim();
    var details = document.getElementById('fdetails').value.trim();

    if (names.length < 3) {
        alert("Enter your full name!");
        return false;
    } else if (email.length < 3) {
        alert("Enter your email address!");
        return false;
    } else if (phone.length < 10) {
        alert("Enter a valid phone number!");
        return false;
    } else if (type.length < 2) {
        alert("Enter your blood type!");
        return false;
    } else if (details.length < 15) {
        alert("Please fill in more details!");
        return false;
    } else {
        alert("Your application has been submitted!");
        // Important: return true if you want the form to actually submit
        return true;
    }
}