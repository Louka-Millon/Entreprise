setInterval(function(){
    var select = document.getElementById("selectedcom");
    var entre = document.getElementById("entreprise");
    if(select.value == "company"){
        entre.style.display = "contents";
    }else{
        entre.style.display = "none";
    }
}, 1000);