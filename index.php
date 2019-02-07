<!DOCTYPE html>
<html>
    <head>
        <title>Enviar SMS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="col-lg-12">
                <form method="POST" action="controller.php">
                    <div class="form-group">
                        <label for="textMessage">Mensagem</label>
                        <textarea class="form-control" rows="5" id="textMessage" name="textMessage" required="true"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="senderNumbers">Números Remetentes</label>
                        <textarea class="form-control" rows="10" id="senderNumbers" name="senderNumbers" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="adresseeNumbers">Números Destinatários</label>
                        <textarea class="form-control" rows="10" id="adresseeNumbers" name="adresseeNumbers" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success pull-right"><i class="glyphicon glyphicon-send"></i> Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
</html>