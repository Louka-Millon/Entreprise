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

