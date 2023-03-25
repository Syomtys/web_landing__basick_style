<?
$name = $_POST['name'];
$contact = $_POST['tel-email'];
$question = $_POST['question'];
$social = $_POST['social'];

$name = htmlspecialchars($name);
$contact = htmlspecialchars($contact);
$question = htmlspecialchars($question);
$social = htmlspecialchars($social);

$name = urldecode($name);
$contact = urldecode($contact);
$question = urldecode($question);
$social = urldecode($social);

$name = trim($name);
$contact = trim($contact);
$question = trim($question);
$social = trim($social);

if (empty($social)) {
    $message = ' <p>Новый вопрос на сайте</p> </br> <b>'.$name.' спрашивает:</b> </br><p>'.$question.' </p> </br> <span> Контакт:'.$contact.'</span>';
} else {
    $message = ' <p>Новый вопрос на сайте</p> </br> <b>'.$name.' спрашивает:</b> </br><p>'.$question.' </p> </br> <span> Контакт:'.$contact.'.</span> </br> <span> Соц. сеть:'.$social.'<span>';
}

$subject = "Вопрос из формы [scam.best]";
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: info@scam.best\r\n"; 
$headers .= "Reply-To: syomtys@gmail.com\r\n"; 

$to = "syomtys@gmail.com";
mail($to, $subject, $message, $headers);
?>
<h1 style="width: 100%; margin: 0; padding: 0; text-align: center">сообщение оправлено</h1>
<h1 style="width: 100%; margin: 0; padding: 0; text-align: center"><a href="http://scam.best#section-7">назад</a></h1>