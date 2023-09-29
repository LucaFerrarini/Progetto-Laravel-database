import './bootstrap';
import 'bootstrap/dist/js/bootstrap';


let angel = document.getElementById("infoARadio")
let human = document.getElementById("infoURadio")

let infoU = document.getElementsByClassName("infoU")
let infoA = document.getElementById("infoA")


function changeRadio()  {

    if (human.checked) { 

        for (let i = 0; i < infoU.length; i++) {
            infoU[i].classList.remove('d-none');
        }

        infoA.classList.add('d-none');

    } else if(angel.checked){
        
        for (let i = 0; i < infoU.length; i++) {
            infoU[i].classList.add('d-none');
        }

        infoA.classList.remove('d-none');
        
    }
}

human.addEventListener("change", changeRadio);
angel.addEventListener("change", changeRadio);

