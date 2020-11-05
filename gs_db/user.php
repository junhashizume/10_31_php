<?php
session_start();
//DB接続
require_once("funcs.php");
sessionCheck();
$pdo = db_conn();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <a class="navbar-brand" href="bm_list_view.php">ブックマーク確認</a>
      <a class="navbar-brand" href="bookmark.php">ブックマーク登録</a>
      <a class="navbar-brand" href="user_view.php">ユーザー一覧</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>ユーザー名：<input type="text" name="name"></label><br>
     <label>ユーザーID：<input type="text" name="lid"></label><br>
     <label>ユーザーPW：<input type="password" name="lpw"></label><br>
     <label><input type="radio" name="kanri_flg" value="0" checked="checked">一般社員<input type="radio" name="kanri_flg" value="1">管理者</label><br>
     <label><input type="radio" name="life_flg" value="0" checked="checked">退社<input type="radio" name="life_flg" value="1">入社</label><br>
     <input type="submit" id="button" value="送信">
    </fieldset>
  </div>
  <div id="bottom">
  <a href="user_view.php">ユーザー確認</a>
  <a href="javascript:history.back();">戻る</a>
  </div>
</form>


</body>
</html>