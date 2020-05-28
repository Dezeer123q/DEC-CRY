<?php
  include_once('header.php');
  include_once('menu_bar.php');
 ?>


  <div class="container" action="">
    <form method="get" action="">
      <h2>Encrypt</h3>
        <input class="imp" type = "text" name="encrypted">
      <h2>Decrypt<h2>
        <input class="imp" type="text" name="decrypted">
        <br>
      <input class="buton" type="submit" name="submit" value="submit">
    </form>
  <hr>

</div>
  <script src="jquery.js"></script>
  <script src="app.js"></script>

  <?php

  $encText = isset($_GET["encrypted"]) == null ? '':($_GET["encrypted"]);
  $dectext = isset($_GET["decrypted"]) == null ? '':($_GET["decrypted"]);


	function encrypt($message, $encryption_key){
	$key = hex2bin($encryption_key);
	$nonceSize = openssl_cipher_iv_length('aes-256-ctr');
	$nonce = openssl_random_pseudo_bytes($nonceSize);
	$ciphertext = openssl_encrypt(
		$message,
		'aes-256-ctr',
		$key,
		OPENSSL_RAW_DATA,
		$nonce
	);
	return base64_encode($nonce.$ciphertext);
}
function decrypt($message,$encryption_key){
	$key = hex2bin($encryption_key);
	$message = base64_decode($message);
	$nonceSize = openssl_cipher_iv_length('aes-256-ctr');
	$nonce = mb_substr($message, 0, $nonceSize, '8bit');
	$ciphertext = mb_substr($message, $nonceSize, null, '8bit');
	$plaintext= openssl_decrypt($ciphertext,'aes-256-ctr',$key,OPENSSL_RAW_DATA,$nonce);
	return $plaintext;
}
	$original_string = $_GET["encrypted"];
	$private_secret_key = '1f4276388ad3214c873428dbef42243f';

	$encrypted = encrypt($encText, $private_secret_key);
  ?>
  <div class="crypt">
    <?php
  	    echo '<h3>Encrypted : '.$encrypted.'</h3>';
  	    echo '<h3>Decrypted : '.decrypt($_GET["decrypted"], $private_secret_key).'</h3>';

    ?>
</div>
<?php
  include_once('footer.php');
 ?>
