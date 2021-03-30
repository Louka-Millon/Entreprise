{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-profil">
            <div class="row-profil">
                <!--<img src="../core/images/background-header.png" alt="Profil">-->
                <h3>{$pseudo}</h3>
                <p>{$statut}</p>

                <p>Voici ci-joint mon CV</p>
                <p>Voici ci-joint ma Lettre de motivation</p>
                <p>Voici nos offres d'emplois</p>
                
                {if $statut == "company"}
                <button id="btn_creation_offre" onclick="document.getElementById('modal').style.display='block'">Ajouter une offre</button>
                <div id="modal" class="modal">
                    <form class="modal-content animate" action="" method="POST">
                        <div class="modal-header">
                            <h3>Création d'une offre</h3>
                            <span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container-modal">
                            <div class="element-modal">
                                <p>Date de début</p>
                                <input type="date" name="debut-offre" id="debut-offre" required>
                                <p>Durée (en semaines)</p>
                                <input type="number" placeholder="Durée de l'offre..." name="duree-offre" id="duree-offre" required>
                                <p>Rémunération (par mois)</p>
                                <input type="number" placeholder="Salaire..." name="salaire-offre" id="salaire-offre" required>
                            </div>
                            <div class="element-modal">
                                <p>Titre</p>
                                <input type="text" placeholder="Titre de l'offre..." name="titre-offre" id="titre-offre" required>
                                <p>Description</p>
                                <input type="text" placeholder="Description de l'offre..." name="desc-offre" id="desc-offre" required>
                            </div>
                        </div>
                        <div class="container-modal modal-bottom">
                            <button type="submit" id="btn_creer">Publier l'offre</button>
                            <button type="button" onclick="document.getElementById('modal').style.display='none'" id="btn_annuler">Annuler</button>
                        </div>
                    </form>
                </div>
                {else}
                <table id="customers">
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>Suppression</th>
                      </tr>
                      {foreach from=$favori item=favorie}
                    <tr>
                        <td><a style="color:black;" href="index.php?page=offre&offre={$favorie.id_offre}">{$favorie.nom_entreprise}</a></td>
                        <td><a style="color:black;" href="../Controllers/delfavori.php?offre={$favorie.id_offre}">supprimer</a></td>
                    </tr>
                      {/foreach}
                </table>
                {/if}
            </div>
            
        </div>
    </article>
</section>

<script src="../core/js/modal.js"></script>