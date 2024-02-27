@include('vues.partials._header')
@include('vues.partials._navbar')

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('vues.partials._sidebar')
        <!-- partial -->
             

          <div class="container-fluid content-wrapper" >
                      
                      <p class="text-muted mb-0 hover-cursor"><i class="mdi mdi-home text-muted hover-cursor"></i>&nbsp;/&nbsp;Tableau de Bord&nbsp;/ Statistiques</p>
              <h5 class='text-center py-4'>Listing des mouvements par postes, clients, produits et commandes.</h5>
              <div class="container">
                      <div class= "d-flex align-items-center justify-content-center ">
                              <div class=" col-md-6">
                                        <div class="card-header row justify-content-center">
                                            <div id="html" class="">
                                            <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary" > POSTES !</button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="your_table_id" class=" table table-bordered table-striped table-hover datatable datatable-Question">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Poste </th>
                                                        <th>Enlevements</th>
                                                        <th >Depotage </th>
                                                        <th> Citernes </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <tr data-entry-id="">
                                                        <td>28/12/2023</td>
                                                        <td>Route PCPB</td>
                                                        <td style="color: #106730; font-weight: 900;">3 050 998</td>
                                                        <td>0</td>
                                                        <td>89</td>
                                                </tr>
                                                <tr data-entry-id="">
                                                        <td>28/12/2023</td>
                                                        <td>Route JET</td>
                                                        <td style="color: #106730; font-weight: 900;">225 001</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                </tr>
                                                <tr data-entry-id="">
                                                        <td>28/12/2023</td>
                                                        <td>Route GAZ</td>
                                                        <td style="color: #106730; font-weight: 900;" >354 400</td>
                                                        <td>0</td>
                                                        <td>14</td>
                                                </tr>
                                                

                                                </tbody>
                                            </table>
                                        </div>
                               </div>
                      </div>
                     
                       <div class='row'>
                          <div class="card-body col-md-12">
                            <div class="card-header row justify-content-center">
                                    <div id="html" class="">
                                    <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary" > PRODUITS !</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class=" table table-bordered table-striped table-hover datatable datatable-Question">
                                    <thead>
                                          <tr>
                                              <th>Date</th>
                                              <th>Produit </th>
                                              <th>Qte Citerne </th>
                                              <th>Depotage </th>
                                              <th>Chaudiere-Groupe </th>
                                              <th>Etalonnage </th>
                                              <th>Debut chargement </th>
                                              <th>Fin chargement</th>
                                              <th>Qte Prede </th>
                                              <th>Qte Charge </th>
                                              <th>Ecart </th>

                                          </tr>
                                      </thead>
                                        <tbody>

                                              <tr data-entry-id="">
                                                    <td>28/12/2023</td>
                                                    <td>SSP</td>
                                                    <td style="color: #106730; font-weight: 900;">1 961 000</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>28/12/2023 02:46:36</td>
                                                    <td>28/12/2023 14:20:45</td>
                                                    <td style="color: #106730; font-weight: 900;">1 956 000</td>
                                                    <td style="color: #106730; font-weight: 900;">1 961 000</td>
                                                    <td style="background-color: red; color: white;">5 000</td>
                                            </tr>
                                            <tr data-entry-id="">
                                                    <td>28/12/2023</td>
                                                    <td>GO</td>
                                                    <td style="color: #106730; font-weight: 900;">1 087 998</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>28/12/2023 02:42:36</td>
                                                    <td>28/12/2023 14:20:53</td>
                                                    <td style="color: #106730; font-weight: 900;">1 048 000</td>
                                                    <td style="color: #106730; font-weight: 900;">1 087 000</td>
                                                    <td style="background-color: red; color: white;">39 999</td>
                                            </tr>
                                            <tr data-entry-id="">
                                                    <td>28/12/2023</td>
                                                    <td>DP</td>
                                                    <td style="color: #106730; font-weight: 900;">2 000</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>28/12/2023 12:10:07</td>
                                                    <td>28/12/2023 12:10:07</td>
                                                    <td style="color: #106730; font-weight: 900;">2 000</td>
                                                    <td style="color: #106730; font-weight: 900;">2 000</td>
                                                    <td style="background-color: red; color: white;"></td>
                                            </tr>
                                      
                                        </tbody>
                                    </table>
                                </div>
                          </div>
                      </div>

                      <div class='row'>
        
                            <div class="card-body col-md-12">
                                <div class="card-header row justify-content-center">
                                    <div id="html" class="">
                                        <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary " > CLIENTS !</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="your_table_id" class=" table table-bordered table-striped table-hover datatable datatable-Question">
                                        <thead>
                                            <tr>
                                                <th>Client </th>
                                                <th>Reference </th>
                                                <th>N`ord </th>
                                                <th>BEP</th>
                                                <th>Citerne </th>
                                                <th>Qte Prede </th>
                                                <th>Qte Chargee </th>
                                                <th>Ecart </th>
                                                <th>Date </th>
                                                <th>Super</th>
                                                <th>Gasoil </th>
                                                <th>Petrole </th>
                                                <th>DDO </th>
                                                <th>JET</th>
                                                <th>Butane</th>
                                                <th>FUEL</th>
                                                <th>Bitume</th>
                                                <th>Depotage </th>
                                                <th>Site </th>
                                                <th>Pass </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <tr data-entry-id="">
                                                <td>BAAO ENERGY</td>
                                                <td>10253847</td>
                                                <td>621</td>
                                                <td>38270</td>
                                                <td>AA693AT</td>
                                                <td>0</td>
                                                <td>45 000</td>
                                                <td>28/12/2023 14:20:53</td>
                                                <td>5 000</td>
                                                <td>40 000</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>ROUTE PCPB</td>
                                                <td>6</td>
                                                
                                        </tr>

                                        <tr data-entry-id="">
                                                <td>BAAO ENERGY</td>
                                                <td>10253847</td>
                                                <td>621</td>
                                                <td>38270</td>
                                                <td>AA693AT</td>
                                                <td>0</td>
                                                <td>45 000</td>
                                                <td>28/12/2023 14:20:53</td>
                                                <td>5 000</td>
                                                <td>40 000</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>ROUTE PCPB</td>
                                                <td>6</td>
                                                
                                        </tr>

                                        <tr data-entry-id="">
                                                <td>BAAO ENERGY</td>
                                                <td>10253847</td>
                                                <td>621</td>
                                                <td>38270</td>
                                                <td>AA693AT</td>
                                                <td>0</td>
                                                <td>45 000</td>
                                                <td>28/12/2023 14:20:53</td>
                                                <td>5 000</td>
                                                <td>40 000</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>ROUTE PCPB</td>
                                                <td>6</td>
                                                
                                        </tr>
                                     

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                           
                        </div>
                </div>

          </div>


       






      </div>
   <!-- page-body-wrapper ends -->


  @include('vues.partials._footer')