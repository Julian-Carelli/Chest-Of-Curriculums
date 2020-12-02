let password = document.getElementById('password');
let checkbox = document.getElementById('checkbox');

const showPassword = () => {
    if(checkbox.checked !== true){
        password.type = 'password';
    }
    else {
        password.type = 'text';
    }
}

checkbox.addEventListener('change', showPassword);

