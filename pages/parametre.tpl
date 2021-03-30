{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-inscription">
            <div class="row-form">
                <form action="../../controllers/index.php" method="get">
                    <div class="items-param titre-items">
                        <h3>Information</h3>
                    </div>
                    <br>
                    <div class="items-param text-center">
                        <img  src="https://www.presse-citron.net/app/uploads/2019/12/avatarsuite.jpg" alt="avatar" width="144px" height="144px" style="object-fit:cover"><br>
                        <input type="file" name="img" >
                    </div>
                    <div class="items-param inputbox">
                        <label for="">Prénom</label><input type="text" name="prenom" >
                        <label for="">Nom</label><input type="text" name="nom" >
                        <label for="">Mot de passe</label><input type="text" name="mot_de_passe">
                        <label for="">Centre</label><input type="text" name="centre">
                        <label for="">Promotion</label><input type="text" name="promotion">
                        <label for="">E-mail</label><input type="text" name="email">
                        
                    </div>
                    <div class="items-param text-center">
                        <input type="file" name="CV" >
                        <input type="file" name="LM" >
                    </div>
                    <div class="items text-center">
                        <input class="parametre" type="submit" value="Changer">
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>