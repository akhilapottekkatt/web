// Attach the event listener to the form
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('form');
    
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent auto-submission
        var errors = [];

        // Validate username
        var username = document.getElementById('username').value.trim();
        if (username === "") {
            errors.push("Username is required.");
        }

        // Validate password
        var password = document.getElementById('password').value.trim();
        if (password.length < 6) {
            errors.push("Password must be at least 6 characters long.");
        }

        // Validate email
        var email = document.getElementById('email').value.trim();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errors.push("Enter a valid email address.");
        }

        // Validate phone number
        var phone = document.getElementById('phone').value.trim();
        var phoneRegex = /^[0-9]{10}$/;
        if (!phoneRegex.test(phone)) {
            errors.push("Enter a valid 10-digit phone number.");
        }

        // Validate gender selection
        var genderSelected = document.querySelector('input[name="gender"]:checked');
        if (!genderSelected) {
            errors.push("Please select a gender.");
        }

        // Display errors or success message
        if (errors.length > 0) {
            alert("Errors:\n" + errors.join("\n"));
        } else {
            alert("Form submitted successfully!");
        }
    });
});
