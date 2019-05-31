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
 </head>
 <body>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo $nickname ?></p>
    <p><?php echo $email ?></p>
    <p><?php echo $contact ?></p>
 
 </body>
 </html>