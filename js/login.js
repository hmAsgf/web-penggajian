const pass = document.querySelector("input");
const btn_show = document.querySelector("i");
btn_show.addEventListener("click", function(){
    if(pass.type === "password"){
        pass.type = "text";
        btn_show.classList.add("hide");
    }
    else{
        pass.type = "password";
        btn_show.remove("hide");;
    }
})