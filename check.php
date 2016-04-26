<?php 
    // フォームからのGET送信を受け取る
    // $_GETスーパーグローバル変数 とは
    // PHPの言語基盤が予め用意したどのページでも使用可能な変数
    // 使用できる条件は変数により異なる
    
    // $_GETの使用可能条件
    // formタグからgetで送信があった際

    // 使い方
    // そのまま$_GETですべての入力値を取る
    // $_GET['nameの値']でひとつの入力値を取る
    
    // var_dump($_GET);
    // var_dump()とは
    // 配列を画面に出力するための言語基盤
    // echoで配列自体を出力することは不可能です。
    // echo $_GET; これはできません

    // echo '<br>';
    // echoは、文字としてHTMLのタグを出力することも可能
    // <br>タグはブラウザ上でひとつ改行をいれるためのタグ

    // echo $_GET['nick_name'];
    // echo '<br>';

    // echo '<h1>ほげほげ</h1>';
    // echo '<br>';
    
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    echo '<br>';
    echo $_POST['nick_name'];
    echo '<br>';
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['content'];

    // 課題
    // PHPでの文字連結
    // 連結したいふたつ以上の文字列をドット . でつなぐ
    $full_name1 = 'Shinya' . 'Hirai';
    $full_name2 = 'Shinya' . ' ' . 'Hirai';
    
    $first_name = 'Shinya';
    $last_name = 'Hirai';
    $full_name3 = $first_name . $last_name;

    // 制御文とは
    // プログラムは、基本1行目から順に処理をしていきます。
    // このプログラムが処理される順を意図的に制御して、
    // 処理の順番を変えたり、条件を設定して実行させたり、
    // または100回繰り返したりするための文を制御文と言います。
    // 代表的な文ではif,for,while,switch,foreach,etc...

    // 条件分岐文 (if)
    // 構文
    // if (条件) {
    //     条件がtrueだった場合の処理
    // } else {
    //     条件がfalseだった場合の処理
    // }

    // ①else以下はオプション
    // ②trueとは、条件が正しければという意味
    // ③falseとは、条件が正しくなければという意味

    // if (true) {
    //     echo '<br>';
    //     echo 'trueの時の処理';
    // } else {
    //     echo '<br>';
    //     echo 'falseの時の処理';
    // }

    // 上記で取得した$_POSTの内容とHTMLを組み合わせて確認画面の作成

    // 扱いやすい変数に加工する
    $nick_name = $_POST['nick_name'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    // バリデーション
    // フォームに対してサービス運営側が求める情報が入力されているかを検証し
    // 条件分岐分を使って真偽それぞれの処理をすること

    // WEBサービスにとって、フォーム(ユーザーの情報を取得する手段)は
    // もっとも重要な機能です。

    // ニックネームのバリデーション
    if ($nick_name === '') {
        // ユーザーがニックネームに値を入れずに送信した場合
        $nick_name_result = 'ニックネームが入力されていません。';
    } else {
        // ユーザーがニックネームに値を入れて送信した場合
        $nick_name_result = $nick_name;
    }

    // メールアドレスのバリデーション
    if ($email === '') {
        // ユーザーがメールアドレスに値を入れずに送信した場合
        $email_result = 'メールアドレスが入力されていません。';
    } else {
        // ユーザーがメールアドレスに値を入れて送信した場合
        $email_result = $email;
    }

    // お問い合わせ内容のバリデーション
    if ($content === '') {
        // ユーザーがお問い合わせ内容に値を入れずに送信した場合
        $content_result = 'お問い合わせ内容が入力されていません。';
    } else {
        // ユーザーがお問い合わせ内容に値を入れて送信した場合
        $content_result = $content;
    }

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h1>お問い合わせ内容確認</h1>
  
  <!-- PHPで作成した変数の値を入れる -->
  <p>ニックネーム : <?php echo $nick_name_result; ?></p>
  <p>メールアドレス : <?php echo $email_result; ?></p>
  <p>お問い合わせ内容 : <?php echo $content_result; ?></p>
  
  <?php if($nick_name !== '' && $email !== '' && $content !== ''): ?>
    <form action="thanks.php" method="post">
      <input type="hidden" name="nick_name" value="<?php echo $nick_name; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="content" value="<?php echo $content; ?>">
      <input type="submit" value="送信">
    </form>
  <?php endif; ?>

</body>
</html>






















