{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-inscription">
            <div class="row-titre">
                <h2>Sign up</h2>
            </div>
            <div class="row-form">
                <form method="GET" action="../controllers/signin.php">
                    <p>Status :</p>
                    <select id="selectedcom" name="select-statut" class="select">
                        <option value="" selected>-- Select a status --</option>
                        <option value="student">Student</option>
                        <option value="company">Company</option>
                    </select>
                    <p>First name :</p>
                    <input type="text" name="prenom">
                    <p>Last name :</p>
                    <input type="text" name="nom">
                    <p>E-mail :</p>
                    <input type="email" name="mail">
                    
                    
                    <p>Password :</p>
                    <input type="password" name="pass">
                    <p>Confirm password :</p>
                    <input type="password" name="confirmpass"><br>
                    <div id="entreprise" style="display:none">
                        <p>Company name :</p>
                        <input type="text" name="nom_entreprise">
                        <p>Location :</p>
                        <input type="text" name="localisation">
                        <p>Number of interns already recieved :</p>
                        <input type="text" name="nombre_stagiaire">
                        <p>Description :</p>
                        <textarea name="description"></textarea>
                        <p>Company phone :</p>
                        <input type="text" name="telephone">
                        <p>Company e-mail :</p>
                        <input type="mail" name="maile">
                        
                    </div>
                    <input type="submit" value="Sign up" id="btn_inscription">
                </form>
                <p>{$erreurinsc}</p>
            </div>
        </div>
    </article>
</section>

<script src="../core/js/inscription.js"></script>