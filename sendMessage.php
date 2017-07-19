<?php
    require __DIR__ . '/vendor/autoload.php';

    use Twilio\Rest\Client;

    class sendMessage {
        function send($phoneNumber, $message) {
            try {
                

                //ID da conta
                $accountId = 'AC16ed6a0694d21be356904e690c37760c';

                //Token de acesso
                $token = 'f220da22cef16c7994d0736f71c48921';

                $client = new Client($accountId, $token);

                $client->messages->create(
                    //Número do telefone de destino
                    $phoneNumber,
                     array(
                        'from' => '+17609068468',
                        'body' => $message
                    )
                );
                
                echo "Mensagem enviada com sucesso para o numero $phoneNumber.<br>";
            } catch(Exception $error) {
                echo 'Erro: ' . $error->getMessage() . '<br><br>';
            }
        }
    }
?>