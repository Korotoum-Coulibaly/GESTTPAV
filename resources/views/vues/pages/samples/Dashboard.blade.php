@include('vues.partials._header')
@include('vues.partials._navbar')

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('vues.partials._sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                      <h2>Content de te revoir,</h2>
                      <p class="mb-md-0">Votre tableau de bord analytique.</p>
                    </div>
                    <div class="d-flex">
                      <i class="mdi mdi-home text-muted hover-cursor"></i>
                      <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Tableau de Bord&nbsp;/</p>
                    </div>
                  </div>
                  <!-- <div class="d-flex justify-content-between align-items-end flex-wrap">
                 
                    <button class="btn btn-primary mt-2 mt-xl-0">Generer un rapport</button>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="row ps-2 pe-2">
              <div class="col-md-12 grid-margin stretch-card ">
                <div class="card ">
                  <div class="card-body dashboard-tabs p-0 ">
                    <ul class="nav nav-tabs px-4" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Citernes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-tab" data-bs-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Produits</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Routes</a>
                      </li>
                    </ul>
                    <div class="tab-content py-0 px-0">
                      <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <div class="d-flex flex-wrap justify-content-xl-between">
                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Date de debut</small>
                              <div >
                                  <input type="date" id="inputDate" max="yyyy-MM-dd">                                
                              </div>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-ev-station me-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Citerne(s) charge</small>
                              <h5 class="me-2 mb-0" id="citerne-charge"></h5>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-gas-station me-3 icon-lg text-primary"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted" >Citerne(s) en chargement</small>
                              <h5 class="me-2 mb-0" id="citerne-en-chargement"></h5>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-transit-transfer me-3 icon-lg text-warning"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Citerne(s) en attente</small>
                              <h5 class="me-2 mb-0" id="citerne-en-attente"></h5>
                            </div>
                          </div>
                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-truck me-3 icon-lg text-danger"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted" >Citerne(s) entree</small>
                              <h5 class="me-2 mb-0" id="citerne-entree"></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                        <div class="d-flex flex-wrap justify-content-xl-between">
                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                  <a class="dropdown-item" href="#">12 Aug 2018</a>
                                  <a class="dropdown-item" href="#">22 Sep 2018</a>
                                  <a class="dropdown-item" href="#">21 Oct 2018</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-water-boiler me-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">SSP</small>
                              <h5 class="me-2 mb-0">2233783</h5>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-water-boiler me-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">GO</small>
                              <h5 class="me-2 mb-0">9833550</h5>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-water-boiler me-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">DP</small>
                              <h5 class="me-2 mb-0">577545</h5>
                            </div>
                          </div>
                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-gas-cylinder me-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">GAZ</small>
                              <h5 class="me-2 mb-0">3497843</h5>
                            </div>
                          </div>
                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-airplane me-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">JET</small>
                              <h5 class="me-2 mb-0">3497843</h5>
                            </div>
                          </div>
                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-fuel me-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">FUEL</small>
                              <h5 class="me-2 mb-0">3497843</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                        <div class="d-flex flex-wrap justify-content-xl-between">
                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Date de debut</small>
                              <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                  <a class="dropdown-item" href="#">12 Aug 2018</a>
                                  <a class="dropdown-item" href="#">22 Sep 2018</a>
                                  <a class="dropdown-item" href="#">21 Oct 2018</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-road me-3 icon-lg text-secondary"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Route PCPB</small>
                              <h5 class="me-2 mb-0">577545</h5>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-road me-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Route JET</small>
                              <h5 class="me-2 mb-0">9833550</h5>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-road me-3 icon-lg text-info"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Route GAZ</small>
                              <h5 class="me-2 mb-0">2233783</h5>
                            </div>
                          </div>
                        
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Statistiques</p>
                    <p class="mb-4">Le volume enlevé par produit par jour</p>
                    <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                    <canvas id="cash-deposits-chart"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Volume Total</p>
                    <h1>288350000</h1>
                    <p class="text-muted">Gérer et anticiper les situations susceptibles d’impacter le processus des enlèvements physiques des produits pétroliers à la GESTOCI.  </p>
                    <div id="total-sales-chart-legend"></div>                  
                  </div>
                  <canvas id="total-sales-chart"></canvas>
                </div>
              </div>
            </div>
           
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
 







  <script>

              // Sélection du champ de saisie de la date
            var inputDate = document.getElementById('inputDate');
            var citerneChargeElement = document.getElementById('citerne-charge');
            var citerneEnChargementElement = document.getElementById('citerne-en-chargement');
            var citerneEnAttenteElement = document.getElementById('citerne-en-attente');
            var citerneEntreeElement = document.getElementById('citerne-entree');

            // Ajout d'un écouteur d'événement pour détecter les changements de date
            inputDate.addEventListener('change', function() {
                // Récupérer la date sélectionnée par l'utilisateur
                var selectedDate = this.value;

                // Mettre à jour les données en fonction de la date sélectionnée
                updateValues(selectedDate);
            });

            // Fonction pour mettre à jour les données en fonction de la date sélectionnée
            function updateValues(selectedDate) {
                // logique pour récupérer les valeurs correspondantes à la date sélectionnée
                // var apiUrl = 'https://apigest.admin-gspm.com/api/' + selectedDate;
                var apiUrl2 = 'https://apigest.admin-gspm.com/api/Thenumberoftrucksbeingloadedfortheday/' + selectedDate;
                var apiUrl3 = 'https://apigest.admin-gspm.com/api/Thenumberoftrucksawaitingentry/' + selectedDate;
                var apiUrl4 = 'https://apigest.admin-gspm.com/api/Thenumberoftrucksbeingloadedandswaitingtobeloaded/' + selectedDate;
                console.log(apiUrl2);
            // Effectuer la requête HTTP avec fetch
            fetch(apiUrl2)
                .then(response => response.json())
                .then(data => {
                  if (data.length > 0) {
                        // Accéder à la première entrée du tableau et récupérer la valeur de NumberOfTrucksLoading
                        var numberoftrucksbeingloadedfortheday = data[0].NumberOfTrucksLoading;
                        console.log(numberoftrucksbeingloadedfortheday);

                        // Afficher les données dans le conteneur approprié
                        citerneEnChargementElement.innerText = numberoftrucksbeingloadedfortheday;
                    } 
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des données:', error);
                    // Gérer l'erreur ici (affichage d'un message d'erreur, etc.)
                });

            fetch(apiUrl3)
                .then(response => response.json())
                .then(data => {
                  if (data.length > 0) {
                        // Accéder à la première entrée du tableau et récupérer la valeur de NumberOfTrucksLoading
                        var numberoftrucksawaitingentry = data[0].NumberOfTrucksLoading;
                        console.log(numberoftrucksawaitingentry);

                        // Afficher les données dans le conteneur approprié
                        citerneEnAttenteElement.innerText = numberoftrucksawaitingentry;
                    } 
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des données:', error);
                    // Gérer l'erreur ici (affichage d'un message d'erreur, etc.)
                });

            fetch(apiUrl4)
                .then(response => response.json())
                .then(data => {
                  console.log(data);
                  if (data.length > 0) {
                        // Accéder à la première entrée du tableau et récupérer la valeur de NumberOfTrucksLoading
                        var numberoftrucksbeingloadedandswaitingtobeloaded = data[0].NumberOfTrucksLoading;
                        console.log(numberoftrucksbeingloadedandswaitingtobeloaded);

                        // Afficher les données dans le conteneur approprié
                        citerneEntreeElement.innerText = numberoftrucksbeingloadedandswaitingtobeloaded;
                    } 
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des données:', error);
                    // Gérer l'erreur ici (affichage d'un message d'erreur, etc.)
                });
          
            }

  </script>



<script>
        // Obtenir la date actuelle
      var today = new Date();

      // Formater la date au format AAAA-MM-JJ pour l'attribut max
      var formattedDate = today.toISOString().split('T')[0];
      document.getElementById('inputDate').max = formattedDate;

</script>









  @include('vues.partials._footer')
