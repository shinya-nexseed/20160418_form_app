<?php 
    // DBへ接続
    // MySQLを扱うためのPHPの関数mysqli関数群を使用
    
    // ①接続
    // $db = mysqli_connect('ホスト名','ユーザー名','パスワード','DB名');
    $db = mysqli_connect('localhost','root','','form_app');

    // ②文字コード設定
    mysqli_set_charset($db, 'utf8');

    // ============ ↑↑↑ここまでは完璧な定型文 ============

    // DBに命令をするための文 SQL文を作成する

    // SQL文を実行する

    // 取得したオブジェクトを変数として使えるように分解する

    // データ操作の必須知識 - CRUD処理
    // Create
    // Read
    // Update
    // Delete

    // 課題
    // SQL文でCRUD処理それぞれを実行するための定型文調査
    // C → INSERT文
    // R → SELECT文
    // U → UPDATE文
    // D → DELETE文

    // ③SQL文の作成
    // $sql = 'SELECT * FROM `contacts` WHERE 1'; // 全件取得
    // $sql = 'SELECT * FROM contacts'; // 全件取得の省略版
    if (!empty($_GET)) {
        $sql = 'SELECT * FROM `contacts` WHERE nick_name="' . $_GET['nick_name'] . '"'; // 一件取得

        // ④処理実行 (CUDは表示する必要がないのでここまで)
        $contacts = mysqli_query($db, $sql);
        // mysqli_query()関数自体がsql文の実行をする
        // var_dump($contacts);

        // ⑤PHPで扱えるデータ (変数や配列) に変換
        // データが複数件ある場合は繰り返し文を使用
        // while ($contact = mysqli_fetch_assoc($contacts)) {
        //     // mysqli_fetch_assoc()関数は、最後データがなくなるとfalseを返す
        //     // ⑥表示 (Rは表示まで)
        //     echo '<pre>';
        //     var_dump($contact);
        //     echo '</pre>';
        //     echo '<hr>';
        // }
    }

    // 条件を増やして検索機能を強化
    // LIKE句を使うとあいまい検索
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <form action="dbconnect.php" method="get">
    <input type="text" name="nick_name">
    <input type="submit" value="お名前で検索">
  </form>
  <?php if(!empty($_GET)): ?>
    <?php while($contact = mysqli_fetch_assoc($contacts)): ?>
      <!-- 繰り返し表示したいコードを記述 -->
      <p>お名前 : <?php echo $contact['nick_name']; ?></p>
      <p>メールアドレス : <?php echo $contact['email']; ?></p>
      <p>お問い合わせ内容 : <?php echo $contact['content']; ?></p>
      <hr>
    <?php endwhile; ?>
  <?php endif; ?>
</body>
</html>












