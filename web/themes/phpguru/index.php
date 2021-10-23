<?php
const PAGE_TITLE = "PHPGURU - Headfirst Tutorial";
function get_theme_directory()
{
  return '/themes/2022/dist';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= PAGE_TITLE ?></title>
  <link href="<?= get_theme_directory() ?>/phpguru.css" rel="stylesheet" />
</head>

<body>
  <div class="container mx-auto px-4">
    <header>
      <h1><?= PAGE_TITLE ?></h1>
    </header>
  </div>
  <script type="text/javascript" src="<?= get_theme_directory(); ?>/phpguru.js"></script>
</body>

</html>