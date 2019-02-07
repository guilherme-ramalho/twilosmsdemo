<?php

    require __DIR__ . '/sendMessage.php';
    
    $messenger = new Messenger();

    //Sent message
    $message = $_POST['textMessage'];
    

    //Sender
    $senderNumbers = explode("\n", $_POST['senderNumbers']);

    //Adressee
    $adresseeNumbers = explode("\n", $_POST['adresseeNumbers']);
    
    $iterator = 0;

    while($receiver = current($adresseeNumbers)) {
        $sender = $senderNumbers[$iterator];
        $messenger->sendMessenge($receiver, $sender, $message);

        //Reset iterator if It reachs the last sender number
        if($iterator >= count($senderNumbers)) {
            $iterator = 0;
        }
        $iterator++;

        //Wait X sec untill next execution
        sleep(5);

        next($adresseeNumbers);
    }
?>