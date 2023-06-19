let open = false;
let x = document.querySelector("#resp-ham");
let menu = document.querySelector("#navmenu .content");

let y = document.querySelectorAll("#navmenu .content a")

for (let ex of y){
    ex.addEventListener("click",showMenu);
}

x.addEventListener("click",showMenu);

function showMenu(){
    if (!open){
        menu.classList.add("show-menu");
        open =true;
    }else{
        menu.classList.remove("show-menu");
        open = false;
    }
}