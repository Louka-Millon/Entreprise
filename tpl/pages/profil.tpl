{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-profil">
            <div class="row-profil">
                <!--<img src="../core/images/background-header.png" alt="Profil">-->
                <h3>{$profile.prenom} {$profile.nom}</h3>
                <p>Status : {$profile.statut}</p>

                <p>Here is my resume.</p>
                <p>Here is my cover letter.</p>
                
                {if $profile.statut == "company"}
                {if $profile.id_personne == $userid}
                <button id="btn_creation_offre" onclick="document.getElementById('modal').style.display='block'">Add an offer</button>
                <table id="customers">
                    <tr>
                        <th>Name of the offer</th>
                        <th>Description</th>
                        <th>Beginning</th>
                        <th>Duration</th>
                        <th>Number of places</th>
                        <th>Remuneration</th>
                        <th>Type of the offer</th>
                        <th>Edit</th>
                        <th>Delete</th>
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
                        <td><input type="submit" value="Edit" name="modifier"></td>
                        <td><input type="submit" value="Delete" name="supprimer"></td>
                        </form>
                    </tr>
                      {/foreach}
                </table>
                <div id="modal" class="modal">
                    <form class="modal-content animate" action="../controllers/addoffre.php" method="POST">
                        <div class="modal-header">
                            <h3>Create an offer</h3>
                            <span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container-modal">
                            <div class="element-modal">
                                <p>Beginning</p>
                                <input type="date" name="debut-offre" id="debut-offre" required>
                                <p>Duration (weeks)</p>
                                <input type="number" placeholder="Duration of the offer..." name="duree-offre" id="duree-offre" required>
                                <p>Remuneration (per month)</p>
                                <input type="number" placeholder="Remuneration..." name="salaire-offre" id="salaire-offre" required>
                                <p>Number of places</p>
                                <input type="number" placeholder="Number of places..." name="nbplace" id="nbplace" required>
                                <p>Type of the offer</p>
                                <select id="selectedcom" name="select-offre" class="select">
                                    <option value="" selected>-- Select an offer --</option>
                                    <option value="CDI">Permanent contract</option>
                                    <option value="CDD">Fixed-term contract</option>
                                    <option value="Alternance">Alternation</option>
                                    <option value="Stage">Internship</option>
                                </select>
                            </div>
                            <div class="element-modal">
                                <p>Title</p>
                                <input type="text" placeholder="Title of the offer..." name="titre-offre" id="titre-offre" required>
                                <p>Description</p>
                                <input type="text" placeholder="Description of the offer..." name="desc-offre" id="desc-offre" required>
                            </div>
                        </div>
                        <div class="container-modal modal-bottom">
                            <button type="submit" id="btn_creer">Post</button>
                            <button type="button" onclick="document.getElementById('modal').style.display='none'" id="btn_annuler">Cancel</button>
                        </div>
                    </form>
                </div>
                {else}
                <table id="customers">
                    <tr>
                        <th>Name of the offer</th>
                        <th>Description</th>
                        <th>Beginning</th>
                        <th>Duration</th>
                        <th>Number of places</th>
                        <th>Remuneration</th>
                        <th>Type of the offer</th>
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
                        <th>Name of the offer</th>
                        <th>Options</th>
                      </tr>
                      {foreach from=$favori item=favorie}
                    <tr>
                        <td><a style="color:black;" href="index.php?page=offre&offre={$favorie.id_offre}">{$favorie.titre_offre}</a></td>
                        <td><a style="color:black;" href="../Controllers/delfavori.php?offre={$favorie.id_offre}">Remove from wishlist</a></td>
                    </tr>
                      {/foreach}
                </table>
                {else}
                <table id="customers">
                    <tr>
                        <th>Name of the offer</th>
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