<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Empresa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav navs">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?= ($BASE) ?>/acceso/dashboard">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i><?= ($SESSION['USUARIO'])."
" ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Datos de perfil</a></li>
            <li><a class="dropdown-item text-danger" href="<?= ($BASE) ?>/acceso/logout">Cerrar Sesión <i class="fas fa-sign-out-alt"></i></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>