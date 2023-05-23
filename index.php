<?php
if (isset($_GET['template'])) {
  $template = $_GET['template'];
}?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <?php
if (isset($template)) {
  if (file_exists("examples/{$template}/{$template}.css")) {
    echo "<link rel='stylesheet' href='examples/{$template}/{$template}.css'>";
  }
} else {
  echo "<link rel='stylesheet' href='css/home.css'>";
}
?>
  <title>Bootstrap Examples</title>
</head>

<body>
  <?php
if (!isset($template)) {
  echo file_get_contents("home.html");
} else {
  echo file_get_contents("examples/$template/index.html");
}?>

  <script type="module" src="js/main.js"></script>
  <script src="js/color-modes.js"></script>

  <?php
if (isset($template)) {
  if ($template === 'dashboard') {
    echo '<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
  integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>';
    echo '<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
  integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>';
  }
  if ($template === 'masonry') {
    echo '<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity: "sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
    async: true></script>';
  }
  if (file_exists("examples/{$template}/{$template}.js")) {
    echo "<script type='module' src='examples/{$template}/{$template}.js'></script>";
  }
} else {
  echo "<script src='js/home.js'></script>";
}
?>
</body>

</html>