<?php
//Принимаем постовые данные
$form=$_POST['form'];
$username=$_POST['username'];
$email=$_POST['email'];
$user_question=$_POST['user_question'];
//Тут указываем на какой ящик посылать письмо
$to = "289199@mail.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта pipes";
// Сообщение письма
$message = "
Форма, которую отправил клиент: ".htmlspecialchars($form)."<br />
Имя пользователя: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)."<br />
Вопрос пользователя: ".htmlspecialchars($user_question);
// Отправляем письмо при помощи функции mail();
$headers = "From: pipes.sl <mail@pipes.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>

<!-- работает только для яндекс почты -->