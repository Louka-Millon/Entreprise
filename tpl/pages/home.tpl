{include file='header.tpl'}

<section>
      <article>
            
            <div class="container-home">
                  <div class="row-home">
                        <h3 class="sectionname text-center">Les domaines les plus recherchés</h3></br>
                  </div>
                  <div class="row-home">
                        {foreach from=$secteur item=top}
                        <div class="items-home" style="background:#E8EBF5;background-position: 50% 50%;background-size: cover;"><div class="centered">{$top.secteur_activite}</div></div>
                        {/foreach}
                  </div>
            </div>
      </article>
      <article>
            <div class="container-suggestion">
                  <div class="row-suggestion">
                        <h3 class="sectionname text-center">Propositions selon votre domaines</h3></br>
                  </div>
                  <div class="row-suggestion">

                        {foreach from=$entreprisedetails item=details}
                              
                        
                        <div class="items-suggest">
                              <div class="left-square">
                                    <div class="top-square">
                                          <h4 class="text-center nameentreprise">{$details.titre_offre}</h4>
                                    </div>
                                    <div class="bottom-square">
                                          <div class="sub-square">
                                                <p class="text-center">{$details.localisation}</p>
                                          </div>
                                          <div class="sub-square">
                                                <p class="text-center">
                                                      {foreach from=$competences item=skills name=comp}
                                                            {if $skills.nom_entreprise eq $details.nom_entreprise}
                                                                  <span>{$skills.competence_recherchee}{if $smarty.foreach.comp.last}.{else},{/if}</span>
                                                            {/if}
                                                            
                                                      {/foreach}</p>
                                          </div>
                                    </div>
                              </div>
                              <div class="main-right">
                                    <div class="right-square removable">
                                          <p class="center">{$details.remuneration} €</p>
                                    </div>
                                    <div class="right-square button-container">
                                          <button class="button-offre"><a style="color:black;" href="index.php?page=offre&offre={$details.id_offre}">Voir l'offre</a></button>
                                    </div>
                              </div>
                              
                        </div>
                        {/foreach}
                        

                  </div>
            </div>
      </article>
</section>
<!--
      <div class="header">
        <h2> Les domaines les plus recherchés</h2>
      </div>
    
      <div class="main">
       
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
      
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
      
      </div>
      
      <h2>Propositions selon votre domaines</h2>
      <fieldset>
            <p style="margin-left: 5%;">Nom du stage</p>
            <p>Localisation &nbsp; &nbsp; Rémunération  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Domaine</p>
            <div style= "position: absolute; margin-left: 90%; background-color: aqua; top: 80%;" class="bouton"> <input type="submit" value="Allez à"> </div>
      </fieldset>
      
      <fieldset>
            <p style="margin-left: 5%;">Nom du stage</p>
            <p>Localisation &nbsp; Rémunération &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Domaine</p>
            <div style="position: absolute; margin-left: 90%; background-color: aqua; bottom: 1%" class="bouton"><input type="submit" value="Allez à"></div>
      </fieldset>
      
      <fieldset>
            <p style="margin-left: 5%;">Nom du stage</p>
            <p>Localisation &nbsp; Rémunération &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Domaine</p>
            <div style= "position: absolute; margin-left: 90%; border-color: aqua; top: 111%" class="bouton"> <input type="submit" value="Allez à"> </div>
      </fieldset>
      
      <fieldset>
            <p style="margin-left: 5%;" >Nom du stage</p>
            <p>Localisation &nbsp; Rémunération &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Domaine</p>
            <div style= "position: absolute; margin-left: 90%; background-color: aqua; top: 124%" class="bouton"> <input type="submit" value="Allez à"> </div>
      
      </fieldset>
-->