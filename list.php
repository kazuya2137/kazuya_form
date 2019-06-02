<?php
require_once('function.php');
require_once('dbconnect.php');

$stmt = $dbh->prepare('SELECT * FROM surveys');
$stmt->execute();
$results = $stmt->fetchAll();

// var_dump($results);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Document</title>
      <link rel="stylesheet" href="arrange.css">
</head>
<body>
    <div  class="bg " style="text-align: center;">
    <?php foreach ($results as $result): ?>
        <p> <?php echo h($result['nickname']) ?></p>
        <p> <?php echo h($result['email']) ?></p>
        <p> <?php echo h($result['content']) ?></p>
    <?php endforeach; ?>
    </div>
    <link rel="stylesheet" href="bootstrap.css">
<script src="bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://beneposto.pl/jqueryrotate/js/jQueryRotateCompressed.js"></script>
　　 <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</body>
</html>