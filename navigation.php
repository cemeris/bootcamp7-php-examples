<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= ($page === 'main') ? "active": ''; ?>" aria-current="page" href="index.php">#1 Greating exmaple</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($page === 'tictactoe') ? "active": ''; ?>" href="tictactoe.php">#2 tictactoe</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Language
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?lang=lv">LV</a></li>
            <li><a class="dropdown-item" href="?lang=en">EN</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>