<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="http://localhost/MyLibrary/public/admin/dashboard"><?php echo(Env::$APP_NAME); ?></a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link"
      href=<?php  echo(App::is_loged_in()? App::route('logout'):App::route('login')); ?>
      ><?php  echo(App::is_loged_in()? 'logout':'login'); ?></a>
    </li>
  </ul>
</nav>