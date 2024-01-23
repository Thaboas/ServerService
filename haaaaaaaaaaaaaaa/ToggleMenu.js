// ToggleMenu.js
document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.getElementById("menu-button");
    const navigation = document.querySelector("nav ul");

    menuButton.addEventListener("click", function() {
        navigation.classList.toggle("show");
    });
});
