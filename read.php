<?php


// データまとめ用のから文字変数
$str = "";

// ファイルを開く（読み取り専用→r）
$file = fopen("data/data.txt", "r");
// ファイルをロック
flock($file, LOCK_EX);

// fgets()で1行ずつ取得→$lineに格納
if ($file){
  while ($line = fgets($file)){
    // fgets→ファイル読み込み
    // 取得したデータを"$str"に追加する
    $str .="<tr><td>{$line}</td></tr>";
    // .=→変数に値を代入
    // var_dump($line);
    // exit();
  }
}

// ファイルのロックを解除する
flock($file,LOCK_UN);

// ファイルを閉じる
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <script src="https: //ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 </head>
 
<body>
  

<table>
  <tr>
    <th>開封日</th>
    <th>商品名</th>
    <th>種類</th>
    <th>メーカー</th>
  </tr>

<tr>
  <td><?=$str?></td>
</tr>

</table>


</body>
</html>