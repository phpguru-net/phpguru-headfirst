<?php
function get_template_directory_uri()
{
  return '/web/themes/phpguru/dist';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - PHPGURU - Headfirst</title>
  <link href="<?= get_template_directory_uri() ?>/admin.css" rel="stylesheet" />
</head>

<body>
  <header>
    <div class="navbar-fixed">
      <nav class="navbar blue lighten-1">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">PHPGURU - Headfirst</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a class="active" href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
          <a href="#" data-target="slide-out" class="sidenav-trigger left"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </div>
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="<?= get_template_directory_uri() ?>/assets/admin/images/sidebar.jpg">
          </div>
          <a href="#user"><img class="circle" src="<?= get_template_directory_uri() ?>/assets/admin/images/phpguru-logo.jpg"></a>
          <a href="#name"><span class="white-text name">PHPGURU</span></a>
          <a href="#email"><span class="white-text email">phpguru@sonnm.com</span></a>
        </div>
      </li>
      <li>
        <ul class="collapsible">
          <li class="active" aria-expanded="true">
            <a class="collapsible-header">
              <i class="material-icons">dashboard</i>
              <p>
                Dashboard
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapsible-body">
              <ul class="nav">
                <li><a href="/pages/admin-dashboard" class="waves-effect">Dashboard<i class="material-icons">web</i></a></li>
                <li><a href="/pages/admin-fixed-chart" class="waves-effect">Fixed Chart<i class="material-icons">list</i></a></li>
                <li><a href="/pages/admin-grid" class="waves-effect active">Grid<i class="material-icons">dashboard</i></a></li>
                <li><a href="/pages/admin-chat" class="waves-effect">Chat<i class="material-icons">chat</i></a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">dashboard</i>Second</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">dashboard</i>Third</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>

      </li>
    </ul>
  </header>
  <main>
    <?php for ($i = 0; $i < 10; $i++) : ?>
      <div class="container">
        <div class="row">
          <div class="col">
            <ul class="collapsible">
              <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </main>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col s6 m3">
          <img class="materialize-logo" src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/materialize-logo.png?v=17909639059119771368" alt="Materialize">
          <p>Made with love by Materialize.</p>
        </div>
        <div class="col s6 m3">
          <h5>About</h5>
          <ul>
            <li><a href="#!">Blog</a></li>
            <li><a href="#!">Pricing</a></li>
            <li><a href="#!">Docs</a></li>
          </ul>
        </div>
        <div class="col s6 m3">
          <h5>Connect</h5>
          <ul>
            <li><a href="#!">Community</a></li>
            <li><a href="#!">Subscribe</a></li>
            <li><a href="#!">Email</a></li>
          </ul>
        </div>
        <div class="col s6 m3">
          <h5>Contact</h5>
          <ul>
            <li><a href="#!">Twitter</a></li>
            <li><a href="#!">Facebook</a></li>
            <li><a href="#!">Github</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="/web//themes//phpguru/dist/admin.js"></script>
</body>

</html>