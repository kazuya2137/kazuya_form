<?php
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
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


</body>
</html>