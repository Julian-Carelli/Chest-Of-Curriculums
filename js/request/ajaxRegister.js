const form = document.getElementById('registerForm');

const ajaxRegister = async e => {

    e.preventDefault()

    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    const data = new FormData(form)
    data.append('username', username)
    data.append('email', email)
    data.append('password', password)

    const res = await fetch('../src/Controllers/formRegister.php', {
        method:'POST',
        body:data
    })

    if(res.ok === true){
        window.location.href = `../views/login.php?email=${email}`
    }

}

form.addEventListener('submit', ajaxRegister)