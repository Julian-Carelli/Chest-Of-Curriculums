const form = document.getElementById('addForm')

const ajaxAddForm = async e => {

    try{

        e.preventDefault()

        let name = document.getElementById('name').value
        let lastName = document.getElementById('lastName').value
        let profession = document.getElementById('profession').value
        let email = document.getElementById('email').value
        let age = document.getElementById('age').value
        let placeOfResidence = document.getElementById('placeOfResidence').value

        const data = new FormData(form)
        data.append('name', name);
        data.append('last-name', lastName);
        data.append('profession', profession);
        data.append('email-curriculum', email);
        data.append('age', age);
        data.append('place-of-residence', placeOfResidence);

        const res = await fetch('../../src/Controllers/addProcess.php', {
            method:'POST',
            body:data
        })

        if(res.ok === true){
            window.location.href = '../views/curriculums.php';
        }

    }
    catch(error){
        console.error(`error ${error}`)
    }

}

form.addEventListener('submit', ajaxAddForm);