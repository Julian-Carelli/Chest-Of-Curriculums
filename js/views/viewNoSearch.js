const viewNoSearch = () => {

    let contain = document.getElementById('container')

    contain.innerHTML = '';

    contain.innerHTML = `
        <div class="Curriculums-curriculum col-4">
            <div class="Curriculums-curriculum__name">
                <h2 class="Curriculums-curriculum__title">
                    No se pudo encontrar ningun nombre
                </h2>
            </div>
            <div class="Curriculums-curriculum__info">
                <p class="Curriculums-curriculum__text">
                    Intentalo nuevamente
                </p>
            </div>
        </div>
    `;

    return contain

}

export default viewNoSearch