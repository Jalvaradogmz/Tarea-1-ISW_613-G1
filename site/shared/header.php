<?php 
	$pages = [
    ['name'=>'Facebook','adress'=>'http://fb.com'],
    ['name'=>'Instagram','adress'=>'http://instagram.com'],
    ['name'=>'Telegram','adress'=>'http://web.telegram.org']
  ];
  $more_pages = [
    ['name'=>'Github','adress'=>'http://github.com'],
    ['name'=>'Gitlab','adress'=>'http://gitlab.com'],
    ['name'=>'Hadoop','adress'=>'http://hadoop.com']
  ];
?>



<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?? 'Page' ?></title>
	<link rel="stylesheet" type="text/css" href="./css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="./imgs/logo.png" >
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <?php 
			  foreach ($pages as $page) {?>
          <a class="navbar-item" href="<?= $page['adress'] ?>">
            <?= $page['name']?>
          </a>
			<?php } ?>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
        <?php foreach ($more_pages as $more) {?>
          <a class="navbar-item" href="<?= $more['adress'] ?>">
            <?= $more['name']?>
          </a>
			  <?php } ?>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>