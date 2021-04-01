{include file='header.tpl'}
<section>
    <article>
        <div id="recherche" >
            <div class="container-recherche" >
                <div class="row-recherche">
                {foreach from=$enliste item=entreprise}
                    <div  class="items titre-entreprise">
                        <h4>{$entreprise.nom_entreprise}</h4>
                        <h5 style="font-size:15px">{$entreprise.titre_offre}</h5>
                        
                        <p class="description">{$entreprise.desc_offre}</p>
                        <a href="../controllers/favori.php?offre={$entreprise.id_offre}" class="bot"><button>Favori</button></a><a href="index.php?page=offre&offre={$entreprise.id_offre}" class="bot"><button>Voir l'offre</button></a>

                    </div>
                {/foreach}   
                </div> 
            </div>
        </div>
        {if $disppage == "yes"}
        <div class="pagination">
            <button id="btn_previous"><a style="color:#000;" href="index.php?page=recherche&index={$pageprecedent}">Précédent</a></button>
            <p id="pages">1/{$nbpage}</p>
            <button id="btn_next"><a style="color:#000;" href="index.php?page=recherche&index={$pagesuivant}">Suivant</a></button>
        </div>
        {/if}
    </article>
</section>


<script>
    var desc = document.getElementsByClassName("description");
    window.onload = function(){
        taille = desc.length;
        if(taille > 300){
            for(let i = 0; i < taille; i++){
                str = desc[i].innerHTML;
                desc[i].innerHTML = str.substr(0,300) + "...";
            }
        }
    };
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>

<script>
    setTimeout(function(){
        var url = "../controllers/recherche.php";  
        $("#recherche").load(url);

    },100);

</script>