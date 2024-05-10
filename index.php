<?php
require __DIR__ . '/models/movie.php';
require __DIR__ . '/models/tv_serie.php';

$avatar = new Movie('Avatar', 'inglese', 8, '19397843', '2:50');
$endgame = new Movie('Avengers: Endgame', 'inglese', 9, '89343909', '2:35');
$il_risveglio_della_forza = new Movie('Star Wars: Il risveglio della Forza', 'inglese', 10, '65324656', '2:25');
$maverick = new Movie('Top Gun: Maverick', 'inglese', 9, '652347865', '1:50');
$the_100 = new TVSerie('The 100', 'inglese', 10, 7);
$the_witcher = new TVSerie('The Witcher', 'inglese', 9, 3);

$movies = [$avatar, $endgame, $il_risveglio_della_forza, $maverick];
$tv_series = [$the_100, $the_witcher];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row g-3">

            <?php foreach ($movies as $movie) { ?>
                <div class="col">
                    <h2><?= $movie->title; ?></h2>
                    <p>lingua: <?= $movie->linguage; ?></p>
                    <p>voto: <?= $movie->vote; ?></p>
                    <p>profitti: $<?= $movie->profitti; ?></p>
                    <p>durata: <?= $movie->durata; ?></p>
                </div>
            <?php } ?>

        </div>
        <div class="row g-3">

            <?php foreach ($tv_series as $tv_serie) { ?>
                <div class="col">
                    <h2><?= $tv_serie->title; ?></h2>
                    <p>lingua: <?= $tv_serie->linguage; ?></p>
                    <p>voto: <?= $tv_serie->vote; ?></p>
                    <p>stagioni: <?= $tv_serie->seasons; ?></p>
                </div>
            <?php } ?>

        </div>
    </div>
</body>

</html>