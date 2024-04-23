import './bootstrap';
import'bootstrap';

function changeBg(){
    let navbar = document.getElementById('navbar');
    let scrollValue = window.scrollY;
    if(scrollValue < 10){
        navbar.classList.remove('bgColor');
    }else{
        navbar.classList.add('bgColor');
    }
}

window.addEventListener('scroll', changeBg);

const toggleSearch = (search,button) =>{
    const searchBar = document.getElementById(search),
          searchButton = document.getElementById(button)

          searchButton.addEventListener('click', () => {
            searchBar.classList.toggle('show-search')
          });
}

toggleSearch('search-bar','search-button')
