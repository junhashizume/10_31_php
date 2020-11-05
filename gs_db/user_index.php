<?php
session_start();
//DB接続
require_once("funcs.php");
sessionCheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>管理画面</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="bm_list_view.php">ブックマークリスト確認</a>
      <a class="navbar-brand" href="bookmark.php">ブックマーク登録</a>
      <a class="navbar-brand" href="user.php">ユーザー登録</a>
      <a class="navbar-brand" href="user_view.php">ユーザー一覧</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- <div>
    <div class="container jumbotron"><?= $view ?></div>
</div> -->
<!-- Main[End] -->

<a href="javascript:history.back();">戻る</a>

</body>
</html>
