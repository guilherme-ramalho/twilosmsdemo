<?php

    require __DIR__ . '/sendMessage.php';
    
    $obj = new sendMessage();

    $message = $_POST['textMessage'];
    $phoneNumbers = trim($_POST['phoneNumbers']);
    
    $numbers = explode("\n", $phoneNumbers);
    $numbers = array_filter($numbers, 'trim');
    
    foreach ($numbers as $key => $value) {
        $obj->send($value, $message);
    }
?>