@include('vues.partials._header')
@include('vues.partials._navbar')

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('vues.partials._sidebar')
        <!-- partial -->
             

          <div class="container-fluid content-wrapper" >
                      
                      <p class="text-muted mb-0 hover-cursor"><i class="mdi mdi-home text-muted hover-cursor"></i>&nbsp;/&nbsp;Tableau de Bord&nbsp;/ Suivie et temps reel</p>
              <h5 class='text-center py-2'>Tableau recapitulatif des mouvements d'enlevements au niveau de GESTOCI TPAV</h5>
              <div class="container">
                      <div class='row'>
        
                          <div class="card-body col-md-6">
                              <div class="card-header row justify-content-center">
                                  <div id="html" class="">
                                      <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary"><strong style="color:orange;">12</strong> vehicules en attente d'affectation !</button>
                                  </div>
                              </div>
                              <div class="table-responsive">
                                  <table id="your_table_id" class=" table table-bordered table-striped table-hover datatable datatable-Question">
                                      <thead>
                                          <tr>
                                              <th>N ord</th>
                                              <th>N charg </th>
                                              <th>N BEP </th>
                                              <th>Client </th>
                                              <th>Pays </th>
                                              <th>Citerne </th>
                                              <th>Produit </th>
                                              <th>Capacite </th>
                                              <th>Date Entree </th>
                                          </tr>
                                      </thead>
                                      <tbody>

                                      <tr data-entry-id="">
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                      </tr>
                                      <tr data-entry-id="">
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                      </tr>
                                      <tr data-entry-id="">
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                              <td>test</td>
                                      </tr>
                                      

                                      </tbody>
                                  </table>
                              </div>

                          </div>
                          <div class="card-body col-md-6">
                            <div class="card-header row justify-content-center">
                                    <div id="html" class="">
                                    <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary"><strong style="color:orange;">20</strong> vehicules affecte dans la base de chargement !</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class=" table table-bordered table-striped table-hover datatable datatable-Question">
                                    <thead>
                                          <tr>
                                              <th>N ord</th>
                                              <th>N charg </th>
                                              <th>N BEP </th>
                                              <th>Client </th>
                                              <th>Pays </th>
                                              <th>Citerne </th>
                                              <th>Qte prede </th>
                                              <th>Qte Chargee</th>
                                              <th>Ecart </th>
                                              <th>Produit </th>
                                              <th>Poste </th>
                                          </tr>
                                      </thead>
                                        <tbody>

                                              <tr data-entry-id="">
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                            </tr>
                                            <tr data-entry-id="">
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                            </tr>
                                            <tr data-entry-id="">
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                            </tr>
                                      
                                        </tbody>
                                    </table>
                                </div>
                          </div>
                      </div>

                      <div class='row border-top'>
                          <div class="card-body col-md-8 ">
                          <div class="card-header row justify-content-center">
                                    <div id="html" class="">
                                    <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary"><strong style="color:orange;">50</strong> vehicules  charge(s) !</button>
                                    </div>
                                </div>
                              <div class="table-responsive">
                                  <table class=" table table-bordered table-striped table-hover datatable datatable-Question">
                                  <thead>
                                          <tr>
                                              <th>N charg </th>
                                              <th>N BEP </th>
                                              <th>Client </th>
                                              <th>Pays </th>
                                              <th>Citerne </th>
                                              <th>Cuves </th>
                                              <th>Qte prede </th>
                                              <th>Qte Chargee</th>
                                              <th>Ecart </th>
                                              <th>Passerelle </th>
                                              <th>Date entree </th>
                                              <th>Date debut </th>
                                              <th>Date fin </th>
                                          </tr>
                                      </thead>
                                      <tbody>

                                      <tr data-entry-id="">
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                            </tr>
                                            <tr data-entry-id="">
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                            </tr>
                                            <tr data-entry-id="">
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                            </tr>
                                            <tr data-entry-id="">
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                            </tr>
                                            <tr data-entry-id="">
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                            </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <div class="card-body col-md-4 border-left">
                            <h6>* Nombre total de citerne par pays :</h6>
                            <button type="button" class="btn btn-primary btn-sm"> CI <span class="badge badge-light">4</span></button>
                            <button type="button" class="btn btn-primary btn-sm"> ML <span class="badge badge-light">4</span></button>
                            <button type="button" class="btn btn-primary btn-sm my-2"> BF <span class="badge badge-light">4</span></button>
                            <button type="button" class="btn btn-secondary btn-sm"> Autres <span class="badge badge-light">4</span></button>  
                            <h6 class="pt-4">* Quantite enleve par produits :</h6>
                            <button type="button" class="btn btn-warning btn-sm "> SSP <span class="badge badge-light">4</span></button>
                            <button type="button" class="btn btn-warning btn-sm"> GO <span class="badge badge-light">4</span></button>
                            <button type="button" class="btn btn-warning btn-sm"> DP <span class="badge badge-light">4</span></button>
                            <button type="button" class="btn btn-warning btn-sm"> JET <span class="badge badge-light">4</span></button> 
                            <button type="button" class="btn btn-warning btn-sm my-4"> BUTANE <span class="badge badge-light">4</span></button>
                            <button type="button" class="btn btn-warning btn-sm"> FUEL <span class="badge badge-light">4</span></button>


                          </div>
                     </div>
                </div>

          </div>


       






      </div>
   <!-- page-body-wrapper ends -->


  @include('vues.partials._footer')