//Récupère l'élément modal
var modal = document.getElementById('modal');

//Ferme le modal quand on clique à côté
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}