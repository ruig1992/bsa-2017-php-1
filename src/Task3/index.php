<?php
    require __DIR__ . '/../../vendor/autoload.php';

    use BinaryStudioAcademy\Task3\PokemonPresenter;
    use BinaryStudioAcademy\Task1;

    $pokemons = [
        new Task1\Pickachu,
        new Task1\Bulbasaur,
        new Task1\Psyduck,
        new Task1\Slowpoke,
    ];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in Web Server</title>
    <style>
    .pokemons-list-section{text-align:center}.pokemons-list-header{margin-bottom:2em;font-size:1.4em}.pokemons-speech{font-size:1em}.pokemons-speech::before{content:'\1F60A  \1F609';margin-right:.5em}.pokemons-speech::after{content:'\1F609  \1F60A';margin-left:.5em}.pokemons-list-section ul{display:flex;flex-wrap:wrap;justify-content:center;list-style-type:none;padding-left:0}.pokemons-list-section li{margin:1em 2em}.pokemons-list-section li img{max-width:200px;width:100%}
    </style>
</head>
<body>
    <section class="pokemons-list-section">
        <header class="pokemons-list-header">
            <h1>Pokemons List</h1>
            <p class="pokemons-speech">
                <em>"Look at us! Are not we wonderful?"</em>
            </p>
        </header>

        <?php echo (new PokemonPresenter($pokemons))->present(); ?>
    </section>
</body>
</html>
