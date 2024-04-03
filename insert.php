<?php
//1. POSTデータ取得
//[name,email,age,naiyou]
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$naiyou = $_POST["naiyou"];


//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=vercel.app','root','');
} catch (PDOException $e) {
  exit('MISSTAKE:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql="INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES(:name,:email,:age,:naiyou,sysdate());";
$stmt = $pdo->prepare($sql);
// $stmt->bindValue(':id', $id ,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name',  $name ,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':age', $age, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("エラってます:".$error[2]);
}else{
  //５．index.phpへリダイレクト
 header("Location: index.php");
exit();
}
?>
