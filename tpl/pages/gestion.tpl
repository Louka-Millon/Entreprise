{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-gestion">
            <div class="row-gestion">
                <h3>Gestion des informations</h3>
                <table id="table-gestion">
                    <tr>
                        <th>Nom complet</th>
                        <th>E-mail</th>
                        <th>Centre</th>
                        <th>Statut</th>
                        <th>Gestion</th>
                    </tr>
                    <tr>
                        <td>Nom + prénom</td>
                        <td>test@test.com</td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="student">Étudiant</option>
                                <option value="representative">Délégué</option>
                                <option value="tutor">Pilote</option>
                                <option value="company">Entreprise</option>
                                <option value="administrator">Administrateur</option>
                            </select>
                        </td>
                        <td>
                            <button id="btn_gestion">Enregistrer</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </article>
</section>