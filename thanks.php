<?php 
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    // 扱いやすい変数を作る
    $nick_name = $_POST['nick_name'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    // DBへの接続
    $db = mysqli_connect('localhost','root','','form_app');
    mysqli_set_charset($db, 'utf8');

    // データの登録 Create
    // $sql = 'INSERT INTO `テーブル名` SET カラム1=値1, カラム2=値2';
    $sql = 'INSERT INTO `contacts` SET nick_name="hoge",
                                       email="hoge@gmail.com",
                                       content="hogehoge",
                                       created=NOW()
                                       ';
    mysqli_query($db,$sql);
    // 登録処理のため、Readの時のように変数で受け取る必要はない

    // 課題
    // $_POSTの値を使いフォームから送信された値をDBに登録できるINSERT文にする
 ?>

<!-- 画面を作成 -->
