<?php 
    // セッションとは
    // 一時的に保存することができる場所がサーバー内にあり
    // その場所をセッションと呼ぶ
    // このセッションは、クライアントとサーバーとの接続が切れるまでは
    // 保存し続けることができる
    // PHPで使用するには
    // ①session_start()関数を使ってセッションの使用を宣言
    // ②$_SESSIONスーパーグローバル変数を使って値を出し入れする

    session_start();


 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <?php echo $_SESSION['hoge']; ?>
  <br>
  <a href="contact.php?action=rewrite">戻る</a>
</body>
</html>
