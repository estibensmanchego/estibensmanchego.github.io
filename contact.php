<?php  
	if ($_POST) {
		$to = 'estibensmanchego@gmail.com';
		$yourname = $_POST['yourname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$comments = $_POST['comments'];

		$comments = '
		<html>
		<head>
		  <title>Recordatorio de cumpleaños para Agosto</title>
		</head>
		<body>
		  <p>' . $comments . '</p>
		  <table>
		    <tr>
		      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
		    </tr>
		    <tr>
		      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
		    </tr>
		    <tr>
		      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
		    </tr>
		  </table>
		</body>
		</html>
		';
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";

		// headers adicionales
		$headers .= 'To: ' . $yourname . ' <' . $email . '>' . "\r\n";
		$headers .= 'From: Estibens Manchego <estibensmanchego@gmail.com>' . "\r\n";
		//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
		//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

		mail($to, $subject, $comments, $headers, '-f estibensmanchego.me');
	} else {
		header("location:index.php");
	}

?>