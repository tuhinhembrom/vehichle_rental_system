// RentRide - script.js

// Welcome message
window.addEventListener("load", function () {
    console.log("Welcome to RentRide Vehicle Rental System");
});

// Login Form
const loginForm = document.querySelector("#loginForm");

if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const email = document.querySelector("#email").value;
        const password = document.querySelector("#password").value;

        if (email === "" || password === "") {
            alert("Please fill in all fields.");
        } else {
            alert("Login Successful!");
            window.location.href = "index.html";
        }
    });
}

// Registration Form
const registerForm = document.querySelector("#registerForm");

if (registerForm) {
    registerForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.querySelector("#name").value;
        const email = document.querySelector("#regEmail").value;
        const phone = document.querySelector("#phone").value;
        const password = document.querySelector("#regPassword").value;
        const confirmPassword = document.querySelector("#confirmPassword").value;

        if (
            name === "" ||
            email === "" ||
            phone === "" ||
            password === "" ||
            confirmPassword === ""
        ) {
            alert("Please fill in all fields.");
            return;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return;
        }

        alert("Registration Successful!");
        window.location.href = "login.html";
    });
}

// Booking Form
const bookingForm = document.querySelector("#bookingForm");

if (bookingForm) {
    bookingForm.addEventListener("submit", function (e) {
        e.preventDefault();

        alert("Your booking has been submitted successfully!");
        bookingForm.reset();
    });
}

// Contact Form
const contactForm = document.querySelector("#contactForm");

if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
        e.preventDefault();

        alert("Thank you! Your message has been sent.");
        contactForm.reset();
    });
}