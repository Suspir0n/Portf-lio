<?php
/*
    $para = "evandrojunior1615@gmail.com";
    $name = $_POST['message'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $mensagem = "Nome: $name<br>";
    $mensagem .= "Email: $email<br>";
    $mensagem .= "Assunto: $subject<br>";
    $mensagem .= "Mensagem: $message<br>";
    $headers = 'From: '.$email."\r\n". 'Reply-To: '.$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($para, $subject, $mensagem, $headers)){
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else{
        echo "Aconteceu um erro, tente novamente mais tarde.";
    }
*/
?>
<?php
//if "email" variable is filled out, send email
if (isset($_REQUEST['email']))  {

    
//Email information
$admin_email = "evandrojunior1615@gmail.com";
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST[' message'];

//send email
mail ( $admin_email , $subject , $message);
/*mail($admin_email, "$subject",  $message, "From:" . $email);*/

//Email response
echo "Thank you for contacting us!";
}

?>