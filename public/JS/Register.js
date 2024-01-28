const password = document.getElementById("password");
const eyeOne = document.querySelector(".img1");
const eyeTwo = document.querySelector(".img2");
const confirmPassword = document.getElementById("confirmPassword");
let state = false;
eyeOne.addEventListener("click", () => {
    if (state) {
        password.setAttribute("type", "password");
        eyeOne.setAttribute("src", "images/eye-close.png");
        state = false;
    } else {
        password.setAttribute("type", "text");
        eyeOne.setAttribute("src", "images/fluent_eye-20-filled.png");
        state = true;
    }
});
let confirmState = false;
eyeTwo.addEventListener("click", () => {
    if (confirmState) {
        confirmPassword.setAttribute("type", "password");
        eyeTwo.setAttribute("src", "images/eye-close.png");
        confirmState = false;
    } else {
        confirmPassword.setAttribute("type", "text");
        eyeTwo.setAttribute("src", "images/fluent_eye-20-filled.png");
        confirmState = true;
    }
});
