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
        $nickname_result = 'ニックネームが入力されていません。';
        # code...
    }else{
        $nickname_result = 'ようこそ、' . $nickname .'様';

    }
    
    if ($email == '') {
        $email_result = 'メールアドレスが入力されていません。';
        # code...
    }else{
        $email_result = 'メールアドレス' . $email;

    }
    
        # code...
    if ($contact == '') {
        $contact_result = 'お問い合わせ内容が入力されていません。';
        # code...
    }else{
        $contact_result = 'お問い合わせ内容' . $contact;

    }
    

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力内容確認</h1>
    <p><?php echo $nickname_result ?></p>
    <p><?php echo $email_result ?></p>
    <p><?php echo $contact_result ?></p>
    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="contact" value="<?php echo $contact ?>">
        <input type="button" value="戻る" onclick="history.back()">
        <?php if ($email != '' && $nickname != '' && $contact != '' ): ?>
        <input type="submit" value="OK">
    <?php endif;?>
    </form>
</body>
</html>