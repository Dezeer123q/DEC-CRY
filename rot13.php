<?php
  include_once('header.php');
  include_once('menu_bar.php');
?>
<div class="container" action="">
      <h3 class="numecriptare">ROT 13</h3>
  <form method="get" action="">
    <h2>Encrypt</h3>
      <input class="imp" type = "text" name="enc">
    <h2>Decrypt<h2>
      <input class="imp" type="text" name="dec">
      <br>
    <input class="buton" type="submit" name="submit" value="submit">
  </form>
  <?php
    error_reporting(0);
    echo "Encrypted:"; echo  str_rot13($_GET["enc"]);
    echo"<br>";
    echo"<br>";
    echo "Decrypted:"; echo  str_rot13($_GET["dec"]);

  ?>
<hr style="margin-top:10px;">
  <img class="rot13" src="rot.png" alt="rot_code">
  <p style="color:azure;">ROT13 is a simple letter substitution cipher that replaces a letter with the 13th letter after it, in the alphabet. ROT13 is a special case of the Caesar cipher which was developed in ancient Rome. </p>
</div>
<?php
  include_once('footer.php');
 ?>
