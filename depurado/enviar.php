<?php 
	include 'class.inputfilter.php';
    $filtro = new InputFilter();

    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Lc03TAUAAAAAKMMFlVua8t-OGYJiGAr1uvLn5X0',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    $res ="success";
    if ($res['success']) {
    	$destino = "ldgamiz12@gmail.com";
    	$nombre = $filtro->process($_POST['nombre']);
    	$email = $filtro->process($_POST['email']);
    	$tel = $filtro->process($_POST['tel']);
    	$mensaje = $filtro->process($_POST['mensaje']);

    	$final = "Nombre: " . $nombre . "\nTelefono: " . $tel . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;
    	$asunto = $nombre. " intenta contactar contigo";
    	$headers= 'From:'.$_POST['email'] . "\r\n" . 'Reply-To:'.$_POST['email']."\r\n".'X-Mailer:PHP/'.phpversion();

    	mail($destino, $asunto, $final, $headers);
    	echo "<script language=JavaScript>alert('Su mensaje fue enviado, pronto recibira una respuesta. Gracias'" . $nombre .");</script>";
    	header("Location:contacto.php");
    } else {
    	//header("Location:contacto.php");
    	echo "<script language=JavaScript>alert('Mensaje no enviado');</script>";
    }
?>