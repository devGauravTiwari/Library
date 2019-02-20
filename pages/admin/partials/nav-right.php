<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li <?php
          echo(App::currentURI()==App::route("admin")?" class='nav-item active'":"class='nav-item'");
           ?>>
            <a class="nav-link" href=<?php echo(App::route("admin")); ?>>
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li <?php
          echo(App::currentURI()==App::route("admin/addbook")?"class='nav-item active'":"class='nav-item'");
           ?>>
            <a class="nav-link" href=<?php echo(App::route("admin/addbook")); ?>>
              <span data-feather="file"></span>
              Add Books
            </a>
          </li>
          <li <?php
          echo(App::currentURI()==App::route("admin/addstudent")?"class='nav-item active'":"class='nav-item'");
           ?>>
            <a class="nav-link" href=<?php echo(App::route("admin/addstudent")); ?>>
              <span data-feather="file"></span>
              Add Students
            </a>
          </li>
          <li <?php
          echo(App::currentURI()==App::route("admin/showstudent")?"class='nav-item active'":"class='nav-item'");
           ?>>
            <a class="nav-link" href=<?php echo(App::route("admin/showstudent")); ?>>
              <span data-feather="file"></span>
              Show Students
            </a>
          </li>
          <li <?php
          echo(App::currentURI()==App::route("admin/freshdb")?"class='nav-item active'":"class='nav-item'");
           ?>>
            <a class="nav-link" href=<?php echo(App::route("admin/freshdb")); ?>>
              <span data-feather="file"></span>
              Fresh DB
            </a>
          </li>
          
        </ul>
      </div>
</nav>