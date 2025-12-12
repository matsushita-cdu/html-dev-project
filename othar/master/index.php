<?php
define('APP_ROOT', __DIR__);
define('SITE_ROOT', dirname(APP_ROOT));
define('PARTS', SITE_ROOT . '/parts');
define('APP_URL', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <meta name="description" content="ページの概要説明文">
  <!-- ogp -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="ページタイトル">
  <meta property="og:description" content="ページの説明">
  <meta property="og:url" content="https://example.com/">
  <meta property="og:image" content="https://example.com/ogp.jpg">
  <?php include PARTS . '/head.php'; ?>
</head>
<body>
  <?php include PARTS . '/header.php'; ?>
  <main>
    <h1>site-a / project-001</h1>
  </main>
  <?php include PARTS . '/footer.php'; ?>
</body>
</html>