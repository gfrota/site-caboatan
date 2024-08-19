<?php
header('Content-Type: text/html; charset=utf-8 Location: /index.php');
$nome = $_GET['nome'];
$celular = $_GET['celular'];
if ($nome == "teste") {
	$to = "sidney.miranda2013@gmail.com";
} else {
	$to = "reginaldo@caboataneassociados.com.br";
}
$subject = "Me Ligue";
$body = "Nome: ".$nome. "\r\n".
		"Celular: ".$celular;
$header = "From:reginaldo@caboataneassociados.com.br"."\r\n".
		"Reply-To:".$email."\r\n".
		"X=Mailer:PHP/".phpversion();
if(mail($to, $subject, $body, $header)) {
	header("Location:http://www.caboataneassociados.com.br");
};
?>
















