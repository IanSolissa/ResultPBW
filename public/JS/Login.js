// show password

let fluentEye = document.getElementById('fluent-eye');
let password = document.getElementById('password');

fluentEye.onclick = function() {
    if(password.type == 'password') {
        password.type = 'text';
    } else {
        password.type = 'password';
    }
};

