<?php
    While($kekka=$re->fetch()){
        for($i=0; $i < 1; $i++) {
?>

<article class="middle">
<a href="hukugen.php">
  <h2>
      <?php
          echo $kekka[$i];
      ?>
  </h2>

      <p>感想:<?php echo $kekka[$i+1]; break; } ?></p>

</a>
  </article>

<?php
    }
?>
