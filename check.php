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

    var_dump($_POST);
    echo '<br>';
    echo $_POST['nick_name'];
    echo '<br>';
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['content'];

    // 課題
    // PHPでの文字連結
    // 条件分岐文 (if)
    // 上記で取得した$_POSTの内容とHTMLを組み合わせて確認画面の作成
 ?>

 <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

</body>
</html>




















