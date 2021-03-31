{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-profil">
            <div class="row-profil">
                <!--<img src="../core/images/background-header.png" alt="Profil">-->
                <h3>{$profile.prenom} {$profile.nom}</h3>
                <p>{$profile.statut}</p>

                <p>Voici ci-joint mon CV</p>
                <p>Voici ci-joint ma Lettre de motivation</p>
                <p>Voici nos offres d'emplois</p>
                
                {if $profile.statut == "company"}
                {if $profile.id_personne == $userid}
                <button id="btn_creation_offre" onclick="document.getElementById('modal').style.display='block'">Ajouter une offre</button>
                <table id="customers">
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>description de l'offre</th>
                        <th>date de l'offre</th>
                        <th>Durée de l'offre</th>
                        <th>Nombre de places</th>
                        <th>rémunération</th>
                        <th>Type d'offre</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                      {foreach from=$listeoffre item=offre}
                    <tr>
                        <form action="../controllers/updateoffre.php?id={$offre.id_offre}" method="POST">
                        <td><input name="titre-offre" type="text" value="{$offre.titre_offre}"></td>
                        <td><input name="desc-offre" type="text" value="{$offre.desc_offre}"></td>
                        <td><input name="debut-offre" type="date" value="{$offre.date_offre}"></td>
                        <td><input name="duree-offre" min="1" type="number" value="{$offre.duree_offre}"></td>
                        <td><input name="nbplace" type="number" value="{$offre.nombre_places}"></td>
                        <td><input name="salaire-offre" type="number" value="{$offre.remuneration}"></td>
                        <td>
                            <select style="width:100px;" id="selectedcom" name="select-offre" class="select">
                                    <option value="{$offre.type_offre}" selected>{$offre.type_offre}</option>
                                    <option value="CDI">CDI</option>
                                    <option value="CDD">CDD</option>
                                    <option value="Alternance">Alternance</option>
                                    <option value="Stage">Stage</option>
                            </select>
                        </td>
                        <td><input type="submit" value="Modifier" name="modifier"></td>
                        <td><input type="submit" value="Supprimer" name="supprimer"></td>
                        </form>
                    </tr>
                      {/foreach}
                </table>
                <div id="modal" class="modal">
                    <form class="modal-content animate" action="../controllers/addoffre.php" method="POST">
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
                                <p>Nombre de place</p>
                                <input type="number" placeholder="Nombre de place..." name="nbplace" id="nbplace" required>
                                <p>Type d'offre</p>
                                <select id="selectedcom" name="select-offre" class="select">
                                    <option value="" selected>-- Sélectionnez une offre --</option>
                                    <option value="CDI">CDI</option>
                                    <option value="CDD">CDD</option>
                                    <option value="Alternance">Alternance</option>
                                    <option value="Stage">Stage</option>
                                </select>
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
                        <th>description de l'offre</th>
                        <th>date de l'offre</th>
                        <th>Durée de l'offre</th>
                        <th>Nombre de places</th>
                        <th>rémunération</th>
                        <th>Type d'offre</th>
                    </tr>
                      {foreach from=$listeoffre item=offre}
                    <tr>
                        
                        <td>{$offre.titre_offre}</td>
                        <td>{$offre.desc_offre}</td>
                        <td>{$offre.date_offre}</td>
                        <td>{$offre.duree_offre}</td>
                        <td>{$offre.nombre_places}</td>
                        <td>{$offre.remuneration}</td>
                        <td>{$offre.type_offre}</td>
                    </tr>
                      {/foreach}
                </table>
                {/if}
                {elseif $profile.statut == "Student" || $profile.statut == "Representative"}
                {if $profile.id_personne == $userid}
                <table id="customers">
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>Suppression</th>
                      </tr>
                      {foreach from=$favori item=favorie}
                    <tr>
                        <td><a style="color:black;" href="index.php?page=offre&offre={$favorie.id_offre}">{$favorie.titre_offre}</a></td>
                        <td><a style="color:black;" href="../Controllers/delfavori.php?offre={$favorie.id_offre}">supprimer</a></td>
                    </tr>
                      {/foreach}
                </table>
                {else}
                <table id="customers">
                    <tr>
                        <th>Nom de l'offre</th>
                      </tr>
                      {foreach from=$favori item=favorie}
                    <tr>
                        <td><a style="color:black;" href="index.php?page=offre&offre={$favorie.id_offre}">{$favorie.titre_offre}</a></td>
                    </tr>
                      {/foreach}
                </table>
                {/if}
                {/if}
            </div>
            
        </div>
    </article>
</section>

<script src="../core/js/modal.js"></script>