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
 ?>
