

<!DOCTYPE html>
<html lang="ja">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>コスメの使用期限確認するやつ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 </head>
 
<body>
<main>
  <div>
    <h1>コスメの使用期限確認するやつ</h1>

    <div class="form">
<form action="create.php" method="POST">
<div>開封日<input type="date" name="openingDate" class="select"></div>
<div>商品名<input type="text" name="itemName"></div>
<div>種類
  <select name="whatItems" id="" class="select">
    <option value="eyeblow">アイブロウ</option>
    <option value="eyeshadow">アイシャドウ</option>
    <option value="foundation">ファンデーション</option>
    <option value="lip">リップ</option>
  </select>
</div>
<div>メーカー
  <select name="maker" id="" class="select">
    <option value="etvos">ETVOS</option>
    <option value="mimc">MiMc</option>
  </select>
</div>
<div>コメント<textarea name="comment"></textarea></div>



<button>submit</button>
</form>


    </div>

<a href="read.php">一覧</a>


<div>
<!-- <table>
  <tr>
    <th>開封日</th>
    <th>商品名</th>
    <th>種類</th>
    <th>メーカー</th>

  </tr>

  <tr>
    <td><?=$openingDate?></td>
    <td><?=$itemName?></td>
    <td><?=$whatItems?></td>
    <td><?=$maker?></td>
    <td><?=$comment?></td>

  </tr>
</table> -->

</div>



  </div>
</main>  


</body>
</html>
