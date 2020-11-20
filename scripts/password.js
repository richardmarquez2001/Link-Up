function validatePassword(form) {
    password = form.password.value;
    confirmed_password = form.confirm_password.value;

    if (password != confirm_password) {
        alert("Passwords did not match.");
        return false;
    } else {
        alert("Passwords match.");
        return true;
    }
    alert("Every fillable section is verified. Taking you to the profile page.");
}