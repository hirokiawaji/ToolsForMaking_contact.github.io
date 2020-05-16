
<?php

// セッションの開始
session_start();

$name = htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8');

$body = htmlspecialchars($_SESSION['body'], ENT_QUOTES, 'UTF-8');

// 接続設定
$user = 'xs540036_root';
$pass = '';

// データベースに接続
$dsn = 'mysql:host=sv10322.xserver.jp;dbname=xs540036_db;charset=utf8';
$conn = new PDO($dsn, $user, $pass); //「$conn」は、任意のオブジェクト名

// データの追加
$sql = 'INSERT INTO form(name, message) VALUES("'.$name.'","'.$message.'")';
$stmt = $conn -> prepare($sql);
$stmt -> execute();
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ユーザー登録フォーム・登録ページ</title>
<style>
p {
  margin-left: 50px;
}
</style>
</head>

<body>
<p>ご登録ありがとうございました。</p>
<p><a href="index.html">入力画面に戻る</a></p>
</body>
</html>
