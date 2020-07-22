<?php

session_start();

$output = array();
$output['status'] = 'error';

$get = @$_SESSION['GET'];
$utms = array();
foreach ($get as $key => $value) {
  if ( strpos($key, 'utm') !== false ) {
    $utms[] = $key.': '.$value.PHP_EOL;
  }
}

require_once(__DIR__ . '/.libs/PHPMailer.php');

// parameters
define('MAIL_FROM', 'site@formulasort.ru');
define('MAIL_SUBJECT', $_POST['subject'] ?? 'Новая заявка с сайта');
define('MAIL_TO', 'yurkaronin@gmail.com');

$mail_to_all = array(
  'yurkaronin@gmail.com',
  // '0travel000@gmail.com'
);

$fields = [
  'name' => 'Имя',
  'subject' => 'Форма',
  'phone' => 'Телефон',
  'message' => 'Текст письма'
];

$files = [
  'file' => ['doc', 'docx', 'pdf', 'txt']
];

// prepare data
$data = $_POST;
$attachFiles = $sendData = [];

foreach ($data as $dataName => $dataElement)
{
  if (array_key_exists($dataName, $fields))
  {
    $sendData[] = sprintf('%s: %s', $fields[$dataName], htmlspecialchars(trim($dataElement)));
  }
}

$sendData[] = PHP_EOL;
$sendData[] = "IP: ".@$_SERVER['REMOTE_ADDR'];
if ( count($utms) > 0 ) {
  $sendData[] = "Метки:".PHP_EOL;
  $sendData = array_merge($sendData, $utms);  
}

foreach ($_FILES as $fileName => $fileData)
{
  $fileInfo = pathinfo($fileData['name']);

  if (array_key_exists($fileName, $files) && in_array($fileInfo['extension'], $files[$fileName]))
  {
    $attachFiles[] = [
      'name' => $fileInfo['basename'],
      'path' => $fileData['tmp_name'],
    ];
  }
}

// prepare mail
$mailer = new \PHPMailer\PHPMailer\PHPMailer();

$mailer->SetFrom(MAIL_FROM);


$mailer->CharSet = 'utf-8';
$mailer->Encoding = 'base64';

$mailer->Subject = MAIL_SUBJECT;
$mailer->Body = implode("\n", $sendData);

// mail recepients
// $mailer->AddAddress(MAIL_TO);
foreach ($mail_to_all as $mail_to) {
  $mailer->AddAddress( $mail_to );
}

// attach files
foreach ($attachFiles as $attachFile) {
  $mailer->AddAttachment($attachFile['path'], $attachFile['name']);
}
// send mail

try {
  $mailer->Send();
  $output['status'] = 'success';
} catch (Exception $e) {
  $output['msg'] = $e->getMessage();
}
echo json_encode($output);
