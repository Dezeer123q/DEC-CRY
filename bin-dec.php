<?php
  include_once('header.php');
  include_once('menu_bar.php');
 ?>
<div class="container">
  <h3 class="numecriptare">Binary to decimal</h3>
  <form method="get" action="">
    <h2>Convert to decimal</h3>
  <input class="imp" type = "text" name="enc">
    <h2>Convet to binary<h2>
  <input class="imp" type="text" name="dec">
    <br>
  <input class="buton" type="submit" name="submit" value="submit">
  </form>
  <?php
  error_reporting(0);
  echo "Converted to decimal:"; echo  bindec($_GET["enc"]);
  echo"<br>";
  echo"<br>";
  echo "Converted to binary:"; echo  decbin($_GET["dec"]);
  ?>
  <hr>
  <p style="color:azure;">In mathematics and digital electronics, a binary number is a number expressed in the base-2 numeral system or binary numeral system, which uses only two symbols: typically "0" and "1".The base-2 numeral system is a positional notation with a radix of 2. Each digit is referred to as a bit. Because of its straightforward implementation in digital electronic circuitry using logic gates, the binary system is used by almost all modern computers and computer-based devices. </p>
  <p style="color:azure;">The decimal numeral system (also called base-ten positional numeral system, and occasionally called denary or decanary) is the standard system for denoting integer and non-integer numbers. It is the extension to non-integer numbers of the Hindu–Arabic numeral system. The way of denoting numbers in the decimal system is often referred to as decimal notation.</p>
</div>
<?php
  include_once('footer.php');
?>
