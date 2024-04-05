const img = document.querySelector('.hidden');
let count = 0
function show(){

    if(count == 0){
        img.style.display = 'block';
        count = 1
    } else {
        img.style.display = 'none';
        count = 0
    }
}

