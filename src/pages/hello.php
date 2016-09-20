<!-- baf.localhost/src/pages/hello.php -->
<?php /** @var string $name */ ?>
Hello <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>