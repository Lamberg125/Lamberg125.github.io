<?php
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];
$token = "887731393:AAFYYSn_GEbe06m221hShVAXz8bxm7u0a6A";
$chat_id = "-363040108";
$arr = array(
  'Имя пользователя: ' => $name,
  'Сообщение: ' => $message,
  'Email' => $email
);
$txt = '';
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
   header('Location: /../thank-you.html');
  //echo "ok";
  exit;
} else {
  echo "Error";
}
?>

