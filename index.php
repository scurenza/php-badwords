<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form con Censura</title>
</head>
<body>
    <h1>Scrivi un testo e decidi tu quali parole censurare!</h1>
    <form action="censorship.php" method="GET">
        <div class=input>
            <label for="paragraph">Inserisci del testo:</label>
            <input type="text" id="paragraph" name="paragraph">
        </div>
        <div class=input>
            <label for="censor">Inserisci la parola da censurare:</label>
            <input type="text" id="censor" name="censor">
        </div>
        <div class="buttons">
            <button type="submit">Invia</button>
            <button type="reset">Cancella</button>
        </div>
    </form>
</body>
</html>