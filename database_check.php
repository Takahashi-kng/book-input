<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
  <title>本の保管</title>
  <link rel="stylesheet" href="site-map.css">
</head>
<body>
  <header>
  <h1>データベース確認/削除</h1>
  </header>

<form class="plus" method="post" action="database_check.php">

<h2>削除した項目にチェックを入れ、[削除]を押してください。</h2>

<?php
  $s=new PDO("mysql:host=localhost;dbname=db1","root","root");
    $kk=$_POST['number'];

  if(isset($kk)){ ?>
<p>※削除を実行しました。</p>
<?php
    $ke=$kk+1;
  $s->query("DELETE FROM CRAFT01 WHERE NUMBER=$ke");
  }

  $s->query("ALTER TABLE CRAFT01 DROP NUMBER");
  $s->query("ALTER TABLE CRAFT01 ADD NUMBER INT(3) AUTO_INCREMENT PRIMARY KEY FIRST");

  $as=0;
  $re=$s->query("SELECT * FROM CRAFT01 ORDER BY NUMBER");
  while ($kekka=$re->fetch()){
 ?>

<tr>
  <?php print "<input type='radio' name='number' value='$as'>";  ?>
    <th>番号：</th>
          <?php print $kekka[0]; ?>
    <th>__タイトル：</th>
          <?php print $kekka[1]; ?>
    <th>__評価：</th>
          <?php print $kekka[2]; ?>
    <th>__コメント：</th>
          <?php print $kekka[3]; ?>
          <br>
</tr>

  <?php
  $as++;
  }
  ?>
  <br><input type='submit' value='削除'>
  <?php
  print "<br><a href='a_index.php'>トップメニューに戻る</a>";
  ?>

</form>
</body>
</html>
