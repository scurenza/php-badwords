<?php
// Funzione per mostrare l'array
var_dump ($_GET);

$paragraph = trim($_GET["paragraph"]);
$censor = $_GET["censor"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form con Censura</title>
</head>
<body>
    <div>
        <h2>Testo del paragfrafo:</h2>
        <p> <?php echo $paragraph; ?> </p>
        <h2>Lunghezza del paragrafo:</h2>
        <p> <?php echo trim(strlen($paragraph)) ?> </p>
        <h2>Paragrafo censurato:</h2>
        <p> <?php echo str_replace($censor, "***", $paragraph) ?> </p>
    </div>
    <div>
        <a href="index.php">Torna alla Home</a>
    </div>
</body>
</html>