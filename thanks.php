<?php
 if ($_SERVER['REQUEST_METHOD'] ==='GET') {
        header('Location: index.html');
}
    require_once('function.php');
    $nickname = h($_POST['nickname']);
    $email = h($_POST['email']);
    $contact = h($_POST['contact']);
    // DBとの接続
    require_once('dbconnect.php');
    // $stmt=$dbh->prepare('INSERT INTO surveys (nickname, email, content) VALUES (?, ?, ?)');
    // $stmt->execute([$nickname, $email, $content]);
    $stmt = $dbh->prepare('INSERT INTO surveys (nickname, email, content) VALUES (?, ?, ?)');
  $stmt->execute([$nickname, $email, $contact]);//?を変数に置き換えてSQLを実行

 ?>
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="utf-8">
     <title>送信完了</title>
    <link rel="stylesheet" href="bootstrap.css">
     <link rel="stylesheet" href="arrange.css">
 </head>
 <body>
    <div  class="bg box12" style="text-align: center;">
    <h1 class="kakkoii mt-5 h1">THANK YOU !!!!</h1>
    <p class="kakkoii mt-5 h2"><?php echo $nickname ?></p>
    <p class="kakkoii mt-5 h2"><?php echo $email ?></p>
    <p class="kakkoii mt-5 h2"><?php echo $contact ?></p>
    <input class="kawaii mt-5" type="button" value="again" onclick="location.href='index.html'">
    <input class="kawaii mt-5" type="button" value="list search" onclick="location.href='search.php'">
    </div>
<script src="bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://beneposto.pl/jqueryrotate/js/jQueryRotateCompressed.js"></script>
　　 <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
 </body>
 </html>