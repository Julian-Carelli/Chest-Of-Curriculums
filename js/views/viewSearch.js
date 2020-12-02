const viewSearch = (data) => {

    let contain = document.getElementById('container')

    contain.innerHTML = "";

    contain.innerHTML = `
        ${data.map(element => `
        <div class="Curriculums-curriculum col-4">
            <div class="Curriculums-curriculum__name">
                <h2 class="Curriculums-curriculum__title">${element.name} ${element.last_name}</h2>
            </div>
            <div class="Curriculums-curriculum__background">
                <img class="Curriculums__img" src="../public/assets/images/ropa1.jpg" alt="curriculum"></img>
            </div>
            <div class="Curriculums-curriculum__info">
                <p class="Curriculums-curriculum__text">${element.profession}</p>
                <p class="Curriculums-curriculum__text">${element.email}</p>
                <p class="Curriculums-curriculum__text">${element.age}</p>
                <p class="Curriculums-curriculum__text">${element.place_of_residence}</p>
                <p class="Curriculums-curriculum__text">${element.date}</p>
            </div>
            <div class="Curriculums-curriculum__buttons">
                <div class="Curriculums-curriculum__link">
                    <button class="Curriculums-curriculum__button btn btn-primary">
                        <a class="Curriculums-curriculum__edit" href="editCurriculum.php?id=${element.id}" >
                            Editar Curriculum
                        </a>
                    </button>
                </div>
                <div class="Curriculums-curriculum__link">
                    <button class="Curriculums-curriculum__button btn btn-danger">
                        <a class="Curriculums-curriculum__delete" href="../src/Controllers/deleteProcess.php?id=${element.id}>">
                            Eliminar Curriculum
                        </a>
                    </button>
                </div>
            </div>
        </div>
        `).join('')}
    `
    return contain;
}

export default viewSearch;