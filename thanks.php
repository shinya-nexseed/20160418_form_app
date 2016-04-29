<?php 
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    // もしデータが送信されていなければ
    if (empty($_POST)) {
        // 画面を遷移させるheader関数
        header('Location: contact.html');
    }

    // 扱いやすい変数を作る
    $nick_name = $_POST['nick_name'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    // DBへの接続
    $db = mysqli_connect('localhost','root','','form_app');
    mysqli_set_charset($db, 'utf8');

    // データの登録 Create
    // $sql = 'INSERT INTO `テーブル名` SET カラム1=値1, カラム2=値2';
    // 文字連結 . を使った文の作成
    // $sql = 'INSERT INTO `contacts` SET nick_name="' . $nick_name . '",
    //                                    email="' . $email . '",
    //                                    content="' . $content . '",
    //                                    created=NOW()
    //                                    ';

    $sql = sprintf('INSERT INTO `contacts` SET nick_name="%s", email="%s", content="%s", cteated=NOW()',
        $nick_name,
        $email,
        $content
        );

    // 関数を使って文字列を作る
    // PHPが自前で用意してくれている機能
    
    // sprintf()関数
    // $name = 'もちもち';
    // $subject = '数学';
    // $score = 100;
    // $result = sprintf('%sは%sのテストで%d点を取りました！',
    //     $name,
    //     $subject,
    //     $score
    //     );
    // echo $result;
    // echo '<br>';


    mysqli_query($db,$sql);
    // 登録処理のため、Readの時のように変数で受け取る必要はない

    // 課題
    // $_POSTの値を使いフォームから送信された値をDBに登録できるINSERT文にする
 ?>

<!-- 画面を作成 -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h1>お問い合わせ有難うございました！</h1>
  <p>送信されたお問い合わせ内容詳細は下記になります。</p>
  <hr>
  <p><?php echo $nick_name; ?></p>
  <p><?php echo $email; ?></p>
  <p><?php echo $content; ?></p>
</body>
</html>




