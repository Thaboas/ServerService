// FormValidation.js
document.addEventListener("DOMContentLoaded", function() {
    const contactForm = document.querySelector(".contact-form form");

    contactForm.addEventListener("submit", function(event) {
        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");
        const messageInput = document.getElementById("message");

        if (nameInput.value.trim() === "" || emailInput.value.trim() === "" || messageInput.value.trim() === "") {
            alert("Please fill out all fields in the form.");
            event.preventDefault();
        }
    });
});
