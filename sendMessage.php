<?php
    require __DIR__ . '/vendor/autoload.php';

    use Twilio\Rest\Client;

    class Messenger {
        function sendMessenge($receiver, $sender, $message) {
            try {
                

                //ID da conta
                $accountId = 'AC44ca83f357d24f1410cc77b6b9c5c078';

                //Token de acesso
                $token = '9552756f8179d1d7327b301b3111f060';

                $client = new Client($accountId, $token);

                $client->messages->create(
                    $receiver,
                     array(
                        'from' => $sender,
                        'body' => $message
                    )
                );
                
                echo "Mensagem enviada com sucesso para o numero $receiver.<br>";
            } catch(Exception $error) {
                echo 'Erro: ' . $error->getMessage() . '<br><br>';
            }
        }
    }
?>