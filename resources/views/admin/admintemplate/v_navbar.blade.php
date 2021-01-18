<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
             <a href="/admin" class=" nav-link {{ request()->is('admin') ? 'active' : ''}}">
                <i class="nav-icon fas fa-home"></i>
                <p>Dashboard</p>
             </a>
          </li>
          <li class="nav-item" >
            <a href="/game" class=" nav-link {{ request()->is('game') ? 'active' : ''}}">
              <i class="nav-icon fas fa-gamepad"></i>
              <p>Game</p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="/pokemon" class=" nav-link {{ request()->is('pokemon') ? 'active' : ''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>Pokedex</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
        </ul>
      </nav>