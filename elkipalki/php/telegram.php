<?php

/* https://api.telegram.org/bot887731393:AAFYYSn_GEbe06m221hShVAXz8bxm7u0a6A/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
echo "Error";
$name = $_POST['user_name'];
$phone = $_POST['user_message'];
$email = $_POST['user_email'];
$token = "887731393:AAFYYSn_GEbe06m221hShVAXz8bxm7u0a6A";
$chat_id = "-363040108";
$arr = array(
  'Имя пользователя: ' => $name,
  'Сообщение: ' => $user_message,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
echo "Error";
/*if ($sendToTelegram) {
  //header('Location: thank-you.html');
  echo "Error";
} else {
  echo "Error";
}*/
?>
