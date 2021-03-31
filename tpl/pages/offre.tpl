{include file='header.tpl'}
<section>
    <article>
        <div class="offre-container">
            <!--Barre de droite avec les informations propres de l'entreprise-->
            <div class="offre-row infos">
                <div class="offre-avatar">
                    
                    <h3>{$entreprisebyname.nom_entreprise}</h3>
                </div>
                <p>{$entreprisebyname.localisation}</p>
                <p>{$entreprisebyname.telephone}</p>
                <p>Fields of activity :</p>
                <ul>
                {foreach from=$competence item=skill}
                    <li>{$skill.competence_recherchee}</li>
                {/foreach}
                </ul>
                <p>Interns rating :</p>
                <span>{$moyenneetudiant.moyenne|string_format:"%.1f"} / 5 : Number of votes : {$moyenneetudiant.compte}</span>
                {if $statut == "student" || $statut == "representative"}
                {if $voteep == "yes"}
                <form method="POST" action="../controllers/noteetudiant.php?offre={$entreprisebyname.id_offre}"><input type="number" name="noteeleve" min="0" max="5" value="0"><input type="submit" value="Vote"></form>
                {/if}
                {/if}
                <p>Tutors rating :</p>

                <span>{$moyennetuteur.moyenne|string_format:"%.1f"} / 5 : Number of votes : {$moyennetuteur.compte}</span>
                {if $statut == "Tutor"}
                {if $votetp == "yes"}
                <form method="POST" action="../controllers/notepilote.php?offre={$entreprisebyname.id_offre}"><input type="number" name="notepilote" min="0" max="5" value="0"><input type="submit" value="Vote"></form>
                {/if}
                {/if}
                <p>Number of CESI students who have taken an internship in this company :</p>
                <span>{$entreprisebyname.nombre_stagiaires}</span>
            </div>
            <!--Détails de l'offre et description des attendus-->
            <div class="offre-row details">
                <div class="details-texte">
                    <h2>{$entreprisebyname.titre_offre}</h2>
                    <p>{$entreprisebyname.desc_offre}</p>
                    <p>Beginning of the offer : {$entreprisebyname.date_offre}</p>
                    <p>Duration of the offer : {$entreprisebyname.duree_offre} week(s)</p>
                    <p>Remuneration : {$entreprisebyname.remuneration} €</p>
                </div>
                <div class="details-boutons">
                    <a href="../controllers/favori.php?offre={$entreprisebyname.id_offre}"><button id="btn_wishlist">Add to wishlist</button></a>
                    <button id="btn_postuler">Apply</button>
                </div>
            </div>
        </div>
    </article>
</section>
