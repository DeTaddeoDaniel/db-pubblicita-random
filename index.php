<?php

    // oncludi il database
    include 'database.php';

    // crea array pubblicità attive
    $pubblicitaAttive = [];

    // controlla se sono attiva le pubblicita
    foreach ($ads as $ad) {
        if($ad['is_active']){
            $pubblicitaAttive[] = $ad;
        }
    }

    // variabili per random
    $min = 1;
    $max = count($pubblicitaAttive);

    // random number
    $random = rand($min, $max);

    // seleziona pubblicita estratta
    $pubblicitaEstratta = $ads[$random];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pubblicita attiva random</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        
        <!-- titolo pagina -->
        <h1>Pubblicità random attive ad ogni reflesh della pagina</h1>

        <!-- indica numero estratto random rispetto al totale -->
        <p>
            <span>Pubblicità random attive estratta:</span>
            <span><?php echo $random; ?></span>
            <span> / </span>
            <span><?php echo $max; ?></span>
        </p>

        <!-- sezione pubblicita -->
        <div class="pubblicita">

            <!-- link al sito della pubblicita -->
            <a href="<?php echo $pubblicitaEstratta['link']; ?>">

                <!-- immagine pubblicità -->
                <img 
                    src="<?php echo $pubblicitaEstratta['image_path']; ?>" 
                    alt="<?php echo 'Link to ' . $pubblicitaEstratta['link']; ?>">
            </a>

        </div>

    </div>

</body>
</html>