<?php
  include_once('header.php');
  include_once('menu_bar.php');
 ?>
<div class="container">
  <h3 class="numecriptare">Hexazecimal to decimal</h3>
  <form method="get" action="">
    <h2>Convert to decimal</h3>
  <input class="imp" type = "text" name="enc">
    <h2>Convet to hexazecimal<h2>
  <input class="imp" type="text" name="dec">
    <br>
  <input class="buton" type="submit" name="submit" value="submit">
  </form>
  <?php
  error_reporting(0);
  echo "Converted to decimal:"; echo  hexdec($_GET["enc"]);
  echo"<br>";
  echo"<br>";
  echo "Converted to hexazecimal:"; echo  dechex($_GET["dec"]);
  ?>
  <hr>
  <p style="color:azure;">In mathematics and computing, hexadecimal (also base 16, or hex) is a positional system that represents numbers using a base of 16. Unlike the common way of representing numbers with ten symbols, it uses sixteen distinct symbols, most often the symbols "0"–"9" to represent values zero to nine, and "A"–"F" (or alternatively "a"–"f") to represent values ten to fifteen. </p>
  <p style="color:azure;">The decimal numeral system (also called base-ten positional numeral system, and occasionally called denary or decanary) is the standard system for denoting integer and non-integer numbers. It is the extension to non-integer numbers of the Hindu–Arabic numeral system. The way of denoting numbers in the decimal system is often referred to as decimal notation.</p>
</div>

<?php
  include_once('footer.php');
 ?>
