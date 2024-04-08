<?php
$to= "adress@site.com";
$subject = "Обращение";
$message = "Текст письма";
$headers = "Content-type:text/plain; charset=utf-8 \r\n";
mail ($to, $subject, $message, $headers)

?>