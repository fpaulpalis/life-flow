function dValidate() {
    var names   = document.getElementById('fname').value.trim();
    var age     = document.getElementById('fage').value.trim();
    var weight  = document.getElementById('fweight').value.trim();
    var email   = document.getElementById('femail').value.trim();
    var phone   = document.getElementById('fphone').value.trim();
    var type    = document.getElementById('ftype').value.trim();
    var details = document.getElementById('fdetails').value.trim();

    if (names.length < 3) {
        alert("Enter your full name!");
        return false;
    } else if (!/^\d+$/.test(age) || age < 18) {
        alert("Enter a valid age (18+).");
        return false;
    } else if (!/^\d+$/.test(weight) || weight < 40) {
        alert("Enter a valid weight (40kg+).");
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
        alert("Your appointment has been booked! You will receive a phone call with further instructions.");
        // return true if you want the form to submit
        return true;
    }
}