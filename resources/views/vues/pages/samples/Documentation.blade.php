@include('vues.partials._header')
@include('vues.partials._navbar')

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('vues.partials._sidebar')
        <!-- partial -->


        <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel w-100  documentation">
        <div class="content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 doc-header">
                <a class="btn btn-primary" href="/TableauDeBord"><i class="mdi mdi-home me-2"></i>Tableau de bord</a>
                <h4 class="text-primary mt-4 ">Documentation</h4>
              </div>
            </div>
            <div class="row doc-content">
              <div class="col-12 col-md-10 offset-md-1">
                <div class="col-12 grid-margin" id="doc-intro">
                    <div class="card">
                           <div class="card-body">
                                <h3 class="mb-4 mt-4">Introduction</h3>
                                <p>Les opérations de chargement de produits pétroliers à la GESTOCI, se font suivant une
                                    chaine de traitement composée de plusieurs acteurs (entre autres : clients, agents de bureau,
                                    operateurs de terrain, responsables de service, etc.). GESTOCI Abidjan fonctionne en H-24, ce
                                    qui rend difficile les missions de certains acteurs, tels que les responsables de service. Ces
                                    derniers doivent continuer à veiller sur l’activité, tout en étant hors site de production.
                                    Cependant, à ce jour, aucun outil ne permet une supervision distante (hors site) des
                                    opérations de chargement.
                                    </p>
                                <p>La mise en œuvre d’une application de suivi distant et temps réel, des opérations de
                                    chargement permettrait de gérer et d’anticiper les situations susceptibles d’impacter le
                                    processus des enlèvements physiques des produits pétroliers à la GESTOCI.</p>
                                <p class="d-inline"><strong>Note</strong>: Nous faisons de notre mieux pour documenter comment utiliser le modèle. 
                                Si vous pensez qu'il manque quelque chose dans la documentation, n'hésitez pas à nous en faire part <a class="d-inline text-info" href="">support@gestoci.ci</a></p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('images/Architecture.PNG') }}" alt="" class="img-fluid" >
                                </div>
                          </div>
                    </div>
                </div>
                <div class="col-12 grid-margin" id="doc-started">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Details</h3>
                            <p>Cette plateforme dispose de toutes les fonctionnalités nécessaires pour répondre aux besoins des décideurs, tout en garantissant la sécurité et la confidentialité de leurs données.</p>
                            <pre >
                                GESTOCI TPAV/
                                ├── Tableau de bord/
                                ├── Suivi Temps reel/
                                ├── Statistiques/
                                ├── Index Compteur/
                                ├── Gestion des utilisateurs/
                                      ├── Gestion des profils/
                                      ├── Gestion des utilisateurs/ 
                                ├── Documentation</pre>
                            <div class="alert alert-success mt-4 d-flex align-items-center" role="alert">
                              <i class="ti-info-alt me-4"></i>
                              <p> <em><strong>Fonctionnalités :</strong></em>  <br><br>
                                        - Retour automatique à la page d’accueil du site après clique sur  
                                           L’onglet accueil <br>
                                        - Le nombre de véhicule charge pour une période définit <br>
                                        - Le nombre de camion en cours de chargement pour la journée <br>
                                        - Le nombre de camion en attente d’entrée <br>
                                        - Le nombre de camion entrée (les camions en cours de chargement + les camions en attente de chargement) <br>
                                        - Le volume enlevé par produit <br>
                                        - Le volume par produit, enlevé par client avec le nombre de citerne utilisé	<br>
                                        - Le volume enlevé par poste de chargement avec le nombre de citerne associe <br>
                                        - Le nombre de camion par client <br>
                                        - La liste des camions charge par jour avec le temps de début et de fin des produits <br>
                                        - L’état des indexes compteur par poste, par bras, par produit, et selon la nature du chargement (Dépotage, étalonnage, chargement client) <br>
                                        - Statistiques 
                                    </p>
                            </div>
                            <hr class="mt-5">
                            <!-- <h4 class="mt-4">Installation</h4>
                            <p class="mb-0">
                              You need to install package files/Dependencies for this project if you want to customize it. To do this, you must have <span class="font-weight-bold">node and npm</span> installed in your computer.
                            </p>
                            <p class="mb-0">Installation guide of the node can be found <a href="https://nodejs.org/en/">here</a>. As npm comes bundled with a node, a separate installation of npm is not needed.</p>
                            <p>
                                If you have installed them, just go to the root folder and run the following command in your command prompt or terminal (for the mac users).
                            </p>
                            <pre class="shell-mode">
npm install</pre>
                            <p class="mt-4">
                              This will install the dev dependencies in the local <span class="font-weight-bold">node_modules</span> folder in your root directory.
                            </p>
                            <p class="mt-2">
                              Then you will need to install <span class="font-weight-bold">Gulp</span>. We use the Gulp task manager for the development processes. Gulp will watch for changes to the SCSS files and automatically compile the files to CSS.
                            </p>
                            <p>Getting started with Gulp is pretty simple. The <a href="https://gulpjs.com/" target="_blank">Gulp</a> site is a great place to get information on installing Gulp if you need more information. You need to first install Gulp-cli in your machine using the below command.</p>
                            <pre class="shell-mode">
npm install -g gulp-cli</pre>
                            <p class="mt-4">This installs Gulp-cli globally to your machine. The other thing that Gulp requires, which, is really what does all the work, is the gulpfile.js. In this file, you set up all of your tasks that you will run.</p>
                            <p>Don't worry. We have this file already created for you!</p>
                            <p>To run this project in development mode enter the following command below. This will start the file watch by gulp and whenever a file is modified, the SCSS files will be compiled to create the CSS file.</p>
<pre class="shell-mode">
gulp serve</pre>           
                            <div class="alert alert-warning mt-4" role="alert">
                              <i class="ti-info-alt-outline"></i>It is important to run <code>gulp serve</code> command from the directory where the gulpfile.js is located.
                            </div> -->
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:../partials/_footer.html -->

        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="" target="_blank">Mlle Coulibaly</a>.</span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>


        </div>
      <!-- page-body-wrapper ends -->
 

  @include('vues.partials._footer')