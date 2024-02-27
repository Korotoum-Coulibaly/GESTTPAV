  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/TableauDeBord">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Tableau de bord</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="/Suivi_Temps_Reel">
          <i class="mdi mdi-update menu-icon"></i>
          <span class="menu-title">Suivi Temps réel </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Statistiques">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">Statistiques</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Index_Compteur">
          <i class="mdi mdi-counter menu-icon"></i>
          <span class="menu-title">Index Compteur</span>
        </a>
      </li>
      <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="mdi mdi-account menu-icon"></i>
        <span class="menu-title">Gestion des utilisateurs</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}"> Gestion des profils </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('permissions.index') }}"> Gestion des permissions </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('groups.index') }}"> Gestion des groupes </a>
            </li>
        </ul>
    </div>
</li>

      <li class="nav-item">
        <a class="nav-link" href="/Documentation">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- partial -->