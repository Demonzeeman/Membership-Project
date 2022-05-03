function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form-message");
// setting message content element
    messageElement.textContent = message;
    messageElement.classList.remove("form-message-success", "form-message-error");
    messageElement.classList.add(`form-message-${type}`); //assign the type of message
}
// setting text content of message element by going through all message elements with this parent class of form-message-error-message
function setInputError(inputElement, message) {
    inputElement.classList.add("form-input-error");
    inputElement.parentElement.querySelector(".form-input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form-input-error");
    inputElement.parentElement.querySelector(".form-input-error-message").textContent = "";
}

// allow switching between login and create Account
document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault(); // prevent using href link
        loginForm.classList.add("form-hidden");
        createAccountForm.classList.remove("form-hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault(); // prevent using href link
        loginForm.classList.remove("form-hidden");
        createAccountForm.classList.add("form-hidden");
    });

loginForm.addEventListener("submit", e => {
    e.preventDefault();



    setFormMessage(loginForm, "error", "Invalid username/password combination");
});

// setting character count, to happen during "Blur" so when user takes focus off that field
document.querySelectorAll(".form-input").forEach(inputElement => {
    inputElement.addEventListener("blur", e => {
        if (e.target.id === "signupUsername" && e.target.value.length > 0 && e.target.value.length < 5) {
           setInputError(inputElement, "Username must be at least 5 characters in length");
        }
    });
// clears the input error message when retyping
    inputElement.addEventListener("input", e => {
        clearInputError(inputElement);
    });
});

});