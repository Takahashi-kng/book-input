<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
  <title>本の保管</title>
  <link rel="stylesheet" href="input-form.css">
</head>
<body>
  <header>
  <h1>入力フォーム</h1>
  </header>

<form class="plus" method="post" action="input-form.php">

<p>本のタイトル　：　<input type="text" name="title"></p>
<p>評価：　
    <?php
      $a=1;
      while ($a <= 5) {
        print "  <input type='radio' name='evalu' value='$a'>$a  ";
        $a++;
      }
      ?>
</p>

<div class="boxA">
  <div>
    コメントを入力<input type="text" name="comment" size="200">
  </div>
</div>

<?php
  $s=new PDO("mysql:host=localhost;dbname=db1","root","root");
    $title=$_POST['title'];
    $evalu=$_POST['evalu'];
    $comment=$_POST['comment'];
      if(isset($title)){
        $s->query("INSERT INTO CRAFT01 (title,evalu,comment) VALUES ('$title','$evalu','$comment')");
      }
 ?>

<input type="submit" value="保存">
<?php print "<br><a href='a_index.php'>トップメニューに戻る</a>"; ?>
</form>
  </body>
</html>
