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
                <span>NOMBRE</span>
                <p>Évaluation des pilotes :</p>
                <span>NOMBRE</span>
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
                    <button id="btn_wishlist">Ajouter à la wishlist</button>
                    <button id="btn_postuler">Postuler</button>
                </div>
            </div>
        </div>
    </article>
</section>
