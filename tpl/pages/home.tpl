{include file='header.tpl'}

<section>
      <article>
            
            <div class="container-home">
                  <div class="row-home">
                        <h3 class="sectionname text-center">Most sought-after fields</h3></br>
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
                        <h3 class="sectionname text-center">Proposals according to your fields</h3></br>
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
                                          <button class="button-offre"><a style="color:black;" href="index.php?page=offre&offre={$details.id_offre}">Consult</a></button>
                                    </div>
                              </div>
                              
                        </div>
                        {/foreach}
                        

                  </div>
            </div>
      </article>
</section>