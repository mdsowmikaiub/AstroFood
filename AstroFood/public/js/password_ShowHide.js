let password = document.getElementById("password");
let eyeicon = document.getElementById("eyeicon");

let cPassword = document.getElementById("cPassword");
let eyeicon2 = document.getElementById("eyeicon2");

eyeicon.onclick = function(){
    if (password.type == "password") {
        password.type = "text";
        eyeicon.src = "../../public/img/eye_open.png";
    }else{
        password.type = "password";
        eyeicon.src = "../../public/img/eye_close.png";
    }
}

eyeicon2.onclick = function(){
    if (cPassword.type == "password") {
        cPassword.type = "text";
        eyeicon2.src = "../../public/img/eye_open.png";
    }else{
        cPassword.type = "password";
        eyeicon2.src = "../../public/img/eye_close.png";
    }
}