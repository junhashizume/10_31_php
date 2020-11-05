<?php
session_start();
sessionCheck();

$name = $_POST['name'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = $_POST['kanri_flg'];
$life_flg = $_POST['life_flg'];

try{
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch(PDOException $e){
    exit('DbConnectError:' . $e->getMessage());
}

$sql = "INSERT INTO gs_user_table( id, name, lid, lpw, kanri_flg, life_flg)
        VALUES( NULL, :name, :lid, :lpw, :kanri_flg, :life_flg)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
        $stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
        $stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_STR);
        $stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_STR);

        $flag = $stmt->execute();

        if($flag == false){
            $error = $stmt->errorInfo();
            exit("ErrorMessage:" . $error[2]);
        }else{
            header('Location: user.php');
            exit();
        }

?>

<html>
<body>
    <a href="javascript:history.back();">戻る</a>
</body>

</html>