<?php 
    session_start(); // 必ず一番上に記述

    // フォームからデータの送信があった際
    if (!empty($_POST)) {
        // セッションに値を入力
        $_SESSION['hoge'] = $_POST['hoge'];

        // header()関数を使用してcheck_back.phpに遷移
        header('Location: check_back.php');
    }

    // 戻るボタンを使って戻ってきた際
    if (isset($_REQUEST['action'])) {
        // 戻ってきた時の処理
        // $_POSTを再現してあげる
        $_POST['hoge'] = $_SESSION['hoge'];
    }
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <form action="contact.php" method="post">

    <?php if (!empty($_POST)): ?>
      <input type="text" name="hoge" value="<?php echo $_POST['hoge']; ?>">
    <?php else: ?>
      <input type="text" name="hoge">
    <?php endif; ?>

    <input type="submit" value="次へ">
  </form>

  <script type="text/javascript" src="js_sample.js"></script>
</body>
</html>
　
