const inputFields = document.querySelectorAll("input");

const registerBtn = document.querySelector(".registerBtn");
const loginBtn = document.querySelector(".loginBtn");
const moveBtn = document.querySelector(".moveBtn");
const register = document.querySelector(".register");
const login = document.querySelector(".login");
const box = document.querySelector(".box");
const signUp = document.querySelector(".signUp");

const email = document.querySelector("#email");
const password1 = document.querySelector("#password1");
const password2 = document.querySelector("#password2");
const username = document.querySelector("#username");

let correctEmail = false;
let correctPassword1 = false;
let correctPassword2 = false;
let correctUsername = false;

loginBtn.addEventListener("click", ()=>{
    
    for (let i = 0; i < inputFields.length; i++) {
            inputFields[i].value = '';
            inputFields[i].style.borderBottomColor = '';
    }
    moveBtn.classList.add("rightBtn");
    login.classList.add("loginForm");
    box.classList.add("small");
    signUp.classList.add("smallSignUp");
    signUp.value = "Sign In";
    moveBtn.innerHTML = "Login";
    register.classList.remove("registerForm");

});

registerBtn.addEventListener("click", ()=>{

    for (i = 0; i < inputFields.length; i++) {
        inputFields[i].value = '';
        inputFields[i].style.borderBottomColor = '';
    }
    moveBtn.classList.remove("rightBtn");
    box.classList.remove("small");
    signUp.classList.remove("smallSignUp");
    signUp.value = "Sign Up";
    moveBtn.innerHTML = "Register";
    setTimeout(function(){
        login.classList.remove("loginForm");
        register.classList.add("registerForm");
    }, 800);
    
});

inputFields.forEach(function(input) {

    input.addEventListener('keydown', function(event) {
    
        if (input.id == "username") {
            if (!((event.keyCode >= 65 && event.keyCode <= 90) || event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39)) {
                event.preventDefault();
            }
        }

        if (event.keyCode == 32) {
            input.value += '_';
        }

    });

    input.addEventListener('click', function() {

        if (input.style.borderBottomColor === 'red') {
    
            input.style.borderBottomColor = '';
    
        }
    
    });

});

function verify() {

    if (username.value.length >= 4) {

        correctUsername = true;

    } else {

        correctUsername = false;
        if (username.value != '') {
            username.style.borderBottomColor = 'red';
        }

    }

    if (email.value.endsWith("@gmail.com" || "@yahoo.com" || "@hotmail.com")) {

        correctEmail = true;

    } else {

        correctEmail = false;
        if (email.value != '') {
            email.style.borderBottomColor = 'red';
        }

    }

    if (password1.value.length >= 8) {

        correctPassword1 = true;
        
    } else {

        correctPassword1 = false;
        if (password1.value != '') {
            password1.style.borderBottomColor = 'red';
        }

    }

    if (password1.value == password2.value) {

        correctPassword2 = true;
        
    } else {

        correctPassword2 = false;
        if (password1.value != '') {
            password2.style.borderBottomColor = 'red';
        }

    }

    if (correctUsername == true && correctEmail == true && correctPassword1 == true && correctPassword2 == true) {

        window.location = '../Main/main.html';

    }

};
