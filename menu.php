<!-- menu.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item <?= basename($_SERVER['PHP_SELF']) === 'formulario.php' ? 'active' : '' ?>">
        <a class="nav-link" href="formulario.php">Cadastrar</a>
      </li>
      <li class="nav-item <?= basename($_SERVER['PHP_SELF']) === 'mostra.php' ? 'active' : '' ?>">
        <a class="nav-link" href="mostra.php">Mostrar</a>
      </li>
      <li class="nav-item <?= basename($_SERVER['PHP_SELF']) === 'mostra_idade.php' ? 'active' : '' ?>">
        <a class="nav-link" href="mostra_idade.php">Idade</a>
      </li>
      <li class="nav-item <?= basename($_SERVER['PHP_SELF']) === 'sair.php' ? 'active' : '' ?>">
        <a class="nav-link" href="sair.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>
