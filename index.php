<?php
    // dichiarazione paragrafo
    $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, nam.';
    // lunghezza paragrafo con spazi
    $lunghezzaParagrafoConSpazi = strlen($paragrafo);
    // lunghezza paragrafo senza spazi
    $lunghezzaParagrafoSenzaSpazi = strlen(str_replace(' ', '', $paragrafo));
    // caratteri da censurare
    $daCensurare = $_GET['parola'];
    // asterischi da sostituire ai caratteri da censurare
    $asterischi = '';
    // ciclo per indicare quanti asterischi utilizzare a seconda di quanti caratteri vengono censurati
    for ($i=0; $i < strlen($daCensurare); $i++) { 
        // concatenazione asterischi
        $asterischi .= '*'; 
    };
    // dichiarazione paragrafo censurato
    $paragrafoCensurato = str_replace($daCensurare, $asterischi, $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Badwords</h1>
    <h2>Paragrafo:</h2>
    <p>
        <?php echo $paragrafo ?>
    </p>
    <h3>Lunghezza paragrafo:</h3>
    <ul>
        <li><?php echo $lunghezzaParagrafoConSpazi ?> caratteri con spaziature</li>
        <li><?php echo $lunghezzaParagrafoSenzaSpazi ?> caratteri senza spaziature</li>
    </ul>
    <h2>Paragrafo censurato:</h2>
    <p>
        <?php echo $paragrafoCensurato ?>
    </p>
</body>
</html>