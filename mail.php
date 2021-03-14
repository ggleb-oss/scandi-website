<?php 
    $fName = 'Имя: '.$_POST['name'].' <br />';
    $fPhone = 'Телефон: '.$_POST['phone'].' <br />';
    $AllInOne =  $fName.$fPhone;
    $to = 'ggleb716@gmail.com'; 
    $headers="From: scandi.ru <site@test.ru>\nReply-to:site@test.ru\nContent-Type: text/html; charset=\"utf-8\"\n"; 
    // функция, которая отправляет наше письмо
    mail($to, 'Заявка', $AllInOne, $headers); 
 
?>