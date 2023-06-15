<!DOCTYPE>
<html>
<head>
  <title>LZRD - Apps</title>
  <link rel="icon" type="image/x-icon" href="/../assets/32h/logo_lzrd_icon32h.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top:64px">
<img style="margin-right:8px;" src="/../assets/64h/logo_lzrd_full64h.png">
<h3 style="padding:16px;">Fusio - Apps</h3>
  <hr>

  <ul>
  <?php
  $items = scandir(__DIR__);
  foreach($items as $item) {
    if ($item[0] !== '.' && is_dir(__DIR__ . '/' . $item)) {
      echo '<li><a href="./' . $item . '">' . ucfirst($item) . '</a></li>';
    }
  }
  ?>
  </ul>
</div>

</body>
</html>
