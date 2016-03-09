<?php

/*if (isset($_POST['gerar'])) {
	
	require("inc/phpqrcode/qrlib.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	QRcode::png($nome, "Imagem_QRCODE_L.png", QR_ECLEVEL_L);
	QRcode::png($nome, "Imagem_QRCODE_M.png", QR_ECLEVEL_M);
	QRcode::png($nome, "Imagem_QRCODE_Q.png", QR_ECLEVEL_Q);
	QRcode::png($nome, "Imagem_QRCODE_H.png", QR_ECLEVEL_H);

	echo '<img src="Imagem_QRCODE_L.png"/> <br/>';
	echo '<img src="Imagem_QRCODE_M.png"/> <br/>';
	echo '<img src="Imagem_QRCODE_Q.png"/> <br/>';
	echo '<img src="Imagem_QRCODE_H.png"/> <br/>';

}






<form method="post"> 
	Name: <input type="text" name="nome" />
	Email: <input type="text" name="email" />
	<input type="submit" value="Gerar QR Code" />
	<input type="hidden" name="gerar" value="s"/>
</form>

*/
	require("inc/phpqrcode/qrlib.php");

	$userID = $_SESSION['loginuser'];
	echo "ID user:	" . $userID  . "<br/>";

	QRcode::png($userID, "Imagem_QRCODE_H.png", QR_ECLEVEL_H, 7); // está gerando imagem, arrumar isso!
	

	echo '<img src="Imagem_QRCODE_H.png"/> <br/>';
	
?>