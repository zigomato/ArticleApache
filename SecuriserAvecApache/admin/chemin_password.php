<?php
echo 'Chemin du dossier a securiser : <strong>'.__DIR__.'</strong><br />';

$username = 'username';
$password = 'mot_de_passe';
$encryptedPassword = crypt($password,base64_encode($password));

echo 'Phrase a recopier :<br />';
echo '<strong>'.$username.':'.$encryptedPassword.'</strong>';

?>