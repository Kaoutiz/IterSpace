export function nav(){
    
    let close = document.getElementById("close-nav-mobile");
    let open = document.getElementById("nav-mobile-icon");

    close.addEventListener("click", function(){
        document.getElementById("nav-mobile").style.display = "none";
    });

    open.addEventListener("click", function(){
        document.getElementById("nav-mobile").style.display = "block";
    });

}