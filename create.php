<?php
// var_dump($_POST);
// exit();

// キー名に送信元ファイルのname属性を指定する．データを受け取る
$openingDate = $_POST["openingDate"];
$itemName = $_POST["itemName"];
$whatItems = $_POST["whatItems"];
$maker = $_POST["maker"];

// if ($_POST["whatItems"]==="eyeblow") {
// $expirationDate = date("Y-m-d",$openingDate.strtotime("+365 day"));
// }elseif ($_POST["whatItems"]==="eyeshadow") {
// $expirationDate = date("Y-m-d",$openingDate.strtotime("+365 day"));
// }
// elseif ($_POST["whatItems"]==="foundation") {
// $expirationDate = date("Y-m-d",$openingDate.strtotime("+180 day"));
// }
// else ($_POST["whatItems"]==="lip") {
// $expirationDate = date("Y-m-d",$openingDate.strtotime("+180 day"))
// }
// 参照https://qiita.com/Yorinton/items/2a3854cd878e310a931f
// $comment = $_POST["comment"];

// データを1件を1行にまとめる
$write_data = "{$openingDate}"." "."{$itemName}"." "."{$whatItems}"." "."{$maker}\n";

// データを保存するファイルを開く
// a:追加書き込みのみで開く → ファイルがなければ作成
$file = fopen("data/data.txt","a");

// ファイルをロックする
flock($file,LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file,$write_data);

// ファイルのロックを解除する
flock($file,LOCK_UN);

// ファイルを閉じる
fclose($file);

// データ入力画面に移動する
header("Location:index.php");




?>

<!DOCTYPE html>
<html lang="ja">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <script src="https: //ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 </head>
 
<body>
  <?=$openingDate?>
  <?=$itemName?>
  <?=$whatItems?>
  <?=$maker?>
  <!-- <?=$comment?> -->

</body>
</html>