<?php
if (isset($_GET['template'])) {
  $template = $_GET['template'];
}?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/favicons/favicon.ico">
  <link rel="icon" href="assets/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="icon" href="assets/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="apple-touch-icon" href="assets/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="manifest" href="assets/favicons/manifest.json">
  <link rel="stylesheet" href="css/styles.css">
  <?php
if (isset($template)) {
  if (file_exists("examples/{$template}/{$template}.css")) {
    echo "<link rel='stylesheet' href='examples/{$template}/{$template}.css'>";
  }
    echo "<script src='js/color-modes.js'></script>";
  if ($template === 'blog') {
    echo "<link href='https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap' rel='stylesheet'>";
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
  echo file_get_contents("mode-toggler.html");
  echo file_get_contents("examples/$template/index.html");
}?>

  <script type="module" src="js/main.js"></script>

  <?php
if (isset($template)) {
  echo "<script src='js/color-modes.js'></script>";
  if ($template === 'dashboard') {
    echo '<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>';
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
