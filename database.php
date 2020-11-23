<?php
$pdo = new PDO(
  'mysql:host=localhost;dbname=blog;charset=utf8',
  'blog',
  '7bv3TpyiboeFTtk7', 
  [PDO::ATTR_EMULATE_PREPARES => false, 
   PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
);
