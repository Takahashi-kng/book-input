<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>トップページ</title>
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <header>
    <h1>読書記録</h1>
  </header>

<div class="boxA">
  <div class="box1">
  <aside>
  <h1>データベース関連</h1>
  <ul>
    <li><a href="database_check.php">データベース-確認/削除</a></li>
  </ul>
  </aside>
  </div>

<div class="box2">
<article class="title-top">
<h1>『PHP』『HTML/CSS』『MySQL』を使用</h1>
<p>読んだ本を記録するサイトです。</p>
<p>以下の[新規入力]から新規追加を行っていきます。</p>
<p>！入力済みをクリックした場合の再編集機能『hukugen.php』は今後作成いたします。！</p>
</article>

<section id="posts">
<article class="middle">
<a href="input-form.php">
<h2>新規入力</h2>
<p>入力フォーム⇒</p>
</a>
</article>

<?php
  require 'kurikaesi.php';
 ?>

</section>

</div>
</div>

  </body>
</html>
