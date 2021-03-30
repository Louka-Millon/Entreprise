{include file='header.tpl'}
<section>
    <article>
        <div class="offre-container">
            <!--Barre de droite avec les informations propres de l'entreprise-->
            <div class="offre-row infos">
                <div class="offre-avatar">
                    <img src="{$entreprisebyname.pathimage}" alt="IMAGE">
                    <h3>{$entreprisebyname.nom_entreprise}</h3>
                </div>
                <p>{$entreprisebyname.localisation}</p>
                <p>{$entreprisebyname.telephone}</p>
                <p>Secteur(s) d'activité :</p>
                <ul>
                {foreach from=$competence item=skill}
                    <li>{$skill.competence_recherchee}</li>
                {/foreach}
                </ul>
                <p>Évaluation des stagiaires :</p>
                <span>{$moyenneetudiant.moyenne|string_format:"%.1f"} / 5 : nombre de votant : {$moyenneetudiant.compte}</span>
                {if $statut == "student" || $statut == "representative"}
                {if $voteep == "yes"}
                <form method="POST" action="../controllers/noteetudiant.php?offre={$entreprisebyname.id_offre}"><input type="number" name="noteeleve" min="0" max="5" value="0"><input type="submit" value="Notez"></form>
                {/if}
                {/if}
                <p>Évaluation des pilotes :</p>

                <span>{$moyennetuteur.moyenne|string_format:"%.1f"} / 5 : nombre de votant : {$moyennetuteur.compte}</span>
                {if $statut == "Tutor"}
                {if $votetp == "yes"}
                <form method="POST" action="../controllers/notepilote.php?offre={$entreprisebyname.id_offre}"><input type="number" name="notepilote" min="0" max="5" value="0"><input type="submit" value="Notez"></form>
                {/if}
                {/if}
                <p>Nombre d’élèves du CESI ayant été pris en stage dans cette entreprise :</p>
                <span>{$entreprisebyname.nombre_stagiaires}</span>
            </div>
            <!--Détails de l'offre et description des attendus-->
            <div class="offre-row details">
                <div class="details-texte">
                    <h2>TITRE DE L'OFFRE</h2>
                    <p>{$entreprisebyname.description}</p>
                </div>
                <div class="details-boutons">
                    <a href="../controllers/favori.php?offre={$entreprisebyname.id_offre}"><button id="btn_wishlist">Ajouter à la wishlist</button></a>
                    <button id="btn_postuler">Postuler</button>
                </div>
            </div>
        </div>
    </article>
</section>
