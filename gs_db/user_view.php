<?php
session_start();
//DB接続
require_once("funcs.php");
sessionCheck();
$pdo = db_conn();

// データ取得
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

// データ表示
$view = "";
if ($status == false) {
    sql_error($status);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        // <a href="detail.php?id=XXX">
        $view .= '<a href="user_update_view.php?id=' . $result["id"] . '">';
        $view .= $result["kanri_flg"] . "：" . $result["lid"] . "：" . $result["name"];
        $view .= '</a>';

        $view .= '<a href="user_delete.php?id=' . $result["id"] . '">';
        $view .= ' / [削除]';
        $view .= '</a>';
        $view .= '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ユーザー表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <a class="navbar-brand" href="bm_list_view.php">ブックマーク確認</a>
      <a class="navbar-brand" href="bookmark.php">ブックマーク登録</a>
      <a class="navbar-brand" href="user.php">ユーザー登録</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

<a href="javascript:history.back();">戻る</a>

</body>
</html>
