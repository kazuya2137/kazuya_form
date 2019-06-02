<?php
    // メソッドがGETの時はページのトップにリダイレクト
    if ($_SERVER['REQUEST_METHOD'] ==='GET') {
        header('Location: index.html');
        }
        // 関数のよび出し
        require_once('function.php');
    $nickname = h($_POST['nickname']);
    $email = h($_POST['email']);
    $contact = h($_POST['contact']);
// スーパーグローバル関数
// echo $nickname;
    if ($nickname == '') {
        $nickname_result = ' Name has not been filled in';
        # code...
    }else{
        $nickname_result = $nickname;

    }
    
    if ($email == '') {
        $email_result = ' Mail adress has not been filled in';
        # code...
    }else{
        $email_result = $email;

    }
    
        # code...
    if ($contact == '') {
        $contact_result = ' Information has not been filled in';
        # code...
    }else{
        $contact_result = $contact;

    }
    

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="arrange.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div  class="bg box11" style="text-align: center;">
    <h1 class="kawaii h1 mt-5">INPUT CONTENT CONFIMATION</h1>
    <p class="kawaii h2 mt-5"><?php echo $nickname_result ?></p>
    <p class="kawaii h2 mt-5"><?php echo $email_result ?></p>
    <p class="kawaii h2 mt-5"><?php echo $contact_result ?></p>
    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="contact" value="<?php echo $contact ?>">
        <input class="kawaii mt-5" type="button" value="back" onclick="history.back()">
        <?php if ($email != '' && $nickname != '' && $contact != '' ): ?>
        <input type="submit"  class="kawaii" value="OK">
    <?php endif;?>
    </form>
    </div> 
<script src="bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://beneposto.pl/jqueryrotate/js/jQueryRotateCompressed.js"></script>
　　 <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>
</html>