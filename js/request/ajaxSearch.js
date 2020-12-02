import viewNoSearch from '../views/viewNoSearch.js';
import viewSearch from '../views/viewSearch.js';

const inputSearch = document.getElementById('search');

const ajaxSearch = async () => {


    try{
        let value = inputSearch.value

        const res = await fetch('../../src/Controllers/searchProcess.php', {
            method:'POST',
            body:new URLSearchParams('name=' + value)
        })
    
        const data = await res.json();
        if(data.length > 0){
            await viewSearch(data)  
        }
        else {
            await viewNoSearch();
        }
    }

    catch(error){
        console.log(`error ${error}`)
    }
    
}


inputSearch.addEventListener('keyup', ajaxSearch);
