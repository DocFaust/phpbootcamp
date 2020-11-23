<?php include "./elements/header.php" ?>
<?php include "./database.php" ?>
<h1>Hello Netbeans</h1>
<?php 
use App\Data\PostsRepository;
$repo = new PostsRepository($pdo);
$posts=$repo->fetchAll();
?>
<ul>
<?php foreach ($posts as $post) { 
    echo "<li>{$post->title}</li>";
} ?>
</ul>
<?php include "./elements/footer.php" ?>
