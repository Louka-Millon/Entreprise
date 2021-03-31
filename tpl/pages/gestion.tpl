{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-gestion">
            <div class="row-gestion">
                <h3>Information management</h3>
                <table id="table-gestion">
                     <!-- Tuteur -->
                    {if $statut == "company" || $statut == "Administrator" || $statut == "Tutor" || $statut == "Representative" || $statut == "Student"}
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Academy</th>
                        <th>Status</th>
                        <th>Management</th>
                        <th>Consult</th>
                    </tr>
                    {/if}
                    {foreach from=$studentdisp item=student}
                    {if $statut == "company" || ($statut == "Student" && $userid != $student.id_personne)}
                    
                    
                    <tr>
                        
                        
                        <td>{$student.prenom} {$student.nom}</td>
                        <td>{$student.mail}</td>
                        <td>
                            
                            {$student.centre}
                               
                        </td>
                        <td>
                            {$student.statut}
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button id="btn_gestion"><a href="index.php?page=profil&id={$student.id_personne}">Go to</a></button>
                        </td>
                    
                    </tr>
                    {/if}

                    <!-- vue admin -->
                    {if $statut == "Administrator" || $statut == "Tutor" || $statut == "Representative" || ($statut == "Student" && $userid == $student.id_personne)}
                    
                    
                    <tr>
                        <form action="../controllers/updategestion.php?id={$student.id_personne}" method="POST">
                        
                        <td><input type="text" name="prenom" value="{$student.prenom}"> <input type="text" name="nom" value="{$student.nom}"></td>
                        <td><input type="text" name="mail" value="{$student.mail}"></td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="{$student.centre}">{$student.centre}</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="entreprise">entreprise</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="Student">Student</option>
                                {if $statut == "Administrator" || $statut == "Tutor" || $statut == "Representative"}<option value="Student">Student</option>{/if}
                                {if $statut == "Administrator" || $statut == "Tutor"}<option value="Tutor">Tutor</option>{/if}
                                {if $statut == "Administrator"}<option value="administrator">Administrator</option>{/if}
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="student" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button id="btn_gestion"><a href="index.php?page=profil&id={$student.id_personne}">Go to</a></button>
                        </td>
                        </form>
                    </tr>
                    
                    {/if}
                    {/foreach}
                    
                    





                <!-- Délégué -->
                   
                    {foreach from=$representativedisp item=repre}
                    {if $statut == "company" || $statut == "Student" || ($statut == "Representative" && $userid != $repre.id_personne)}
                    
                    
                    <tr>
                        
                        
                        <td>{$repre.prenom} {$repre.nom}</td>
                        <td>{$repre.mail}</td>
                        <td>
                            
                            {$repre.centre}
                               
                        </td>
                        <td>
                            {$repre.statut}
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button  id="btn_gestion"><a href="index.php?page=profil&id={$repre.id_personne}">Go to</a></button>
                        </td>
                    
                    </tr>
                    {/if}

                    <!-- vue admin -->
                    {if $statut == "Administrator" || $statut == "Tutor" || ($statut == "Representative" && $userid == $repre.id_personne)}
                    
                    
                    <tr>
                        <form action="../controllers/updategestion.php?id={$repre.id_personne}" method="POST">
                        
                        <td><input type="text" name="prenom" value="{$repre.prenom}"> <input type="text" name="nom" value="{$repre.nom}"></td>
                        <td><input type="text" name="mail" value="{$repre.mail}"></td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="{$repre.centre}">{$repre.centre}</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="entreprise">entreprise</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                {if $statut == "Administrator" || $statut == "Tutor"}<option value="Student">Student</option>{/if}
                                <option value="Representative">Representative</option>
                                {if $statut == "Administrator" || $statut == "Tutor"}<option value="Tutor">Tutor</option>{/if}
                                {if $statut == "Administrator"}<option value="administrator">Administrator</option>{/if}
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="repre" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button  id="btn_gestion"><a href="index.php?page=profil&id={$repre.id_personne}">Go to</a></button>
                        </td>
                        </form>
                    </tr>
                    
                    {/if}
                    {/foreach}







                    <!-- Tuteur -->
                    {if $statut == "Administrator" || $statut == "Tutor"}
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Academy</th>
                        <th>Status</th>
                        <th>Management</th>
                        <th>Consult</th>
                    </tr>
                    {/if}
                    {foreach from=$tutordisp item=tutor}
                    {if $statut == "Tutor" && $userid != $tutor.id_personne}
                    
                    
                    <tr>
                        
                        
                        <td>{$tutor.prenom} {$tutor.nom}</td>
                        <td>{$tutor.mail}</td>
                        <td>
                            
                            {$tutor.centre}
                               
                        </td>
                        <td>
                            {$tutor.statut}
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button id="btn_gestion"><a href="index.php?page=profil&id={$tutor.id_personne}">Go to</a></button>
                        </td>
                    
                    </tr>
                    {/if}

                    <!-- vue admin -->
                    {if $statut == "Administrator" || ($statut == "Tutor" && $userid == $tutor.id_personne)}
                    
                    
                    <tr>
                        <form action="../controllers/updategestion.php?id={$tutor.id_personne}" method="POST">
                        
                        <td><input type="text" name="prenom" value="{$tutor.prenom}"> <input type="text" name="nom" value="{$tutor.nom}"></td>
                        <td><input type="text" name="mail" value="{$tutor.mail}"></td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="{$tutor.centre}">{$tutor.centre}</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="entreprise">entreprise</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="Tutor">Tutor</option>
                                {if $statut == "Administrator"}<option value="administrator">Administrator</option>{/if}
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="tutor" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button id="btn_gestion"><a href="index.php?page=profil&id={$tutor.id_personne}">Go to</a></button>
                        </td>
                        </form>
                    </tr>
                    
                    {/if}
                    {/foreach}










                    
                    <!-- vue entreprise -->
                    {if $statut == "Administrator" || $statut == "company"}
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Academy</th>
                        <th>Status</th>
                        <th>Management</th>
                        <th>Consult</th>
                    </tr>
                    {/if}
                    {foreach from=$companydisp item=company}
                    {if $statut == "company" && $userid != $company.id_personne}
                    
                    
                    <tr>
                        
                        
                        <td>{$company.prenom} {$company.nom}</td>
                        <td>{$company.mail}</td>
                        <td>
                            
                            {$company.centre}
                               
                        </td>
                        <td>
                            {$company.statut}
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion"><a href="index.php?page=profil&id={$company.id_personne}">Go to</a></button>
                        </td>
                    
                    </tr>
                    {/if}

                    <!-- vue admin -->
                    {if $statut == "Administrator" || ($statut == "company" && $userid == $company.id_personne)}
                    
                    
                    <tr>
                        <form action="../controllers/updategestion.php?id={$company.id_personne}" method="POST">
                        
                        <td><input type="text" name="prenom" value="{$company.prenom}"> <input type="text" name="nom" value="{$company.nom}"></td>
                        <td><input type="text" name="mail" value="{$company.mail}"></td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="{$company.centre}">{$company.centre}</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="entreprise">entreprise</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="company">company</option>
                                {if $statut == "Administrator"}<option value="administrator">Administrator</option>{/if}
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="company" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion"><a href="index.php?page=profil&id={$company.id_personne}">Go to</a></button>
                        </td>
                        </form>
                    </tr>
                    
                    {/if}
                    {/foreach}
                    
                    
                    
                    {if $statut == "Administrator"}
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Academy</th>
                        <th>Status</th>
                        <th>Management</th>
                        <th>Consult</th>
                    </tr>
                    {foreach from=$admindisp item=admin}
                    <tr>
                        <form action="../controllers/updategestion.php?id={$admin.id_personne}" method="POST">
                        
                        <td>{$admin.prenom} {$admin.nom}</td>
                        <td>{$admin.mail}</td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="{$admin.centre}">{$admin.centre}</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="aucun">None</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="administrator">Administrator</option>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="admin" name="admin" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion"><a href="index.php?page=profil&id={$admin.id_personne}">Go to</a></button>
                        </td>
                        </form>
                    </tr>
                    {/foreach}
                    {/if}
                </table>
            </div>
        </div>
    </article>
</section>