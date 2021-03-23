function display(){
    document.getElementById("open").setAttribute("style", "display:none;");
    document.getElementById("close").setAttribute("style", "display:flex;");
    document.getElementsByClassName("row-nav")[0].setAttribute("style", "left:0px");
    
}

function hide(){
    document.getElementById("open").setAttribute("style", "display:flex;");
    document.getElementById("close").setAttribute("style", "display:none;");
    document.getElementsByClassName("row-nav")[0].setAttribute("style", "left:-100%");
}

setInterval(function(){
    if (window.matchMedia("(min-width: 1030px)").matches) {
        document.getElementsByClassName("row-search")[0].setAttribute("style", "flex-direction:row;");
    } else {
        if(typeof(document.getElementById("titre")) != 'undefined' && document.getElementById("titre" != null)){
            document.getElementsByClassName("row-search")[0].setAttribute("style", "flex-direction:unset;");
        }else{
            document.getElementsByClassName("row-search")[0].setAttribute("style", "flex-direction:column;");
        }

    }    
}, 20);
