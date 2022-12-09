const registerBtn = document.querySelector(".registerBtn")
const loginBtn = document.querySelector(".loginBtn")
const moveBtn = document.querySelector(".moveBtn")
const register = document.querySelector(".register")
const login = document.querySelector(".login")
const box = document.querySelector(".box")
const signUp = document.querySelector(".signUp")

const email = document.querySelector("#email")
const password1 = document.querySelector("#password1")
const password2 = document.querySelector("#password2")

loginBtn.addEventListener("click", ()=>{
    
    moveBtn.classList.add("rightBtn");
    login.classList.add("loginForm");
    box.classList.add("small");
    signUp.classList.add("smallSignUp");
    signUp.value = "Sign In";
    moveBtn.innerHTML = "Login";
    register.classList.remove("registerForm");

})

registerBtn.addEventListener("click", ()=>{

    moveBtn.classList.remove("rightBtn");
    box.classList.remove("small");
    signUp.classList.remove("smallSignUp");
    signUp.value = "Sign Up";
    moveBtn.innerHTML = "Register";
    setTimeout(function(){
        login.classList.remove("loginForm");
        register.classList.add("registerForm");
    }, 800);
    
})

function verify() {

    if (email.value.endsWith("@gmail.com" || "@yahoo.com" || "@hotmail.com")) {

        if (password1.value.length >= 8 && password1.value == password2.value) {

            window.location = '../Main/main.html';
            
        }

    }

}