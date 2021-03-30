{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-profil">
            <div class="row-profil">
                <!--<img src="../core/images/background-header.png" alt="Profil">-->
                <h3>{$pseudo}</h3>
                <p>Statut : {$statut}</p>

                <p>Voici ci-joint mon CV</p>
                <p>Voici ci-joint ma Lettre de motivation</p>
                <p>Voici nos offres d'emplois</p>
                <h3>Favoris</h3>
                {if $statut == "company"}
                {else}
                <table id="customers">
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>Gestion</th>
                      </tr>
                      {foreach from=$favori item=favorie}
                    <tr>
                        <td><a style="color:black;" href="index.php?page=offre&offre={$favorie.id_offre}">{$favorie.nom_entreprise}</a></td>
                        <td><a style="color:black;" href="../Controllers/delfavori.php?offre={$favorie.id_offre}">Supprimer</a></td>
                    </tr>
                      {/foreach}
                </table>
                {/if}
            </div>
        </div>
    </article>
</section>