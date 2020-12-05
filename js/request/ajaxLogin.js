const form = document.getElementById('loginForm')

const ajaxLogin = async e => {

    e.preventDefault()

    const email = document.getElementById('email').value
    const password = document.getElementById('password').value

    const data = new FormData(form);
    data.append('email-login', email);
    data.append('password-login', password);

    const res = await fetch('../src/Controllers/formLogin.php', {
        method:'POST',
        body:data
    })

    if(res.ok === true){
        window.location.href = '../views/curriculums.php';
    }
}

form.addEventListener('submit', ajaxLogin);