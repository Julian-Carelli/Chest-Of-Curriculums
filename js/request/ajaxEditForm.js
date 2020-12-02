const form = document.getElementById('editForm')

const ajaxEditForm = async e => {

    try{

        e.preventDefault()

        let name = document.getElementById('name').value
        let lastName = document.getElementById('lastName').value
        let profession = document.getElementById('profession').value
        let email = document.getElementById('email').value
        let age = document.getElementById('age').value
        let placeOfResidence = document.getElementById('placeOfResidence').value
        let id = document.getElementById('id').value


        const data = new FormData(form)
        data.append('name', name);
        data.append('last-name', lastName);
        data.append('profession', profession);
        data.append('email-curriculum', email);
        data.append('age', age);
        data.append('place-of-residence', placeOfResidence);

        console.log('ola');

        const res = await fetch(`../../src/Controllers/editProcess.php?id=${id}`, {
            method:'POST',
            body:data
        })

        window.location.href = '../views/curriculums.php';

    }
    catch(error){
        console.error(`error ${error}`)
    }

}

form.addEventListener('submit', ajaxEditForm);