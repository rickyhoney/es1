<html>
    <body>
        <h1> prova parametri passati in POST </h1>

        <?php

        $nome_utente = $_POST ['nome'];

        $nome_email = $_POST ['mail'];
        
        echo "<p>" , $nome_utente , "<p>";
        echo "<p> " , $nome_email , "<p>";

        ?>

</body>

</html>

