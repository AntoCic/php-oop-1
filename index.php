<?php
require __DIR__ . '/models/production.php';

$avatar = new Production('Avatar', 'inglese', 8);
$endgame = new Production('Avengers: Endgame', 'inglese', 9);
$il_risveglio_della_forza = new Production('Star Wars: Il risveglio della Forza', 'inglese', 10);
$maverick = new Production('Top Gun: Maverick', 'inglese', 9);
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
    <?php var_dump($avatar) ?>
    <br>
    <?php var_dump($endgame) ?>
    <br>
    <?php var_dump($il_risveglio_della_forza) ?>
    <br>
    <?php var_dump($maverick) ?>
    <br>
    <div class="container">
        <div class="row g-3">
            <div class="col">
                <h2><?= $avatar->title ?></h2>
                <p>lingua: <?= $avatar->linguage ?></p>
                <p>voto: <?= $avatar->vote ?></p>
            </div>
            <div class="col">
                <h2><?= $endgame->title ?></h2>
                <p>lingua: <?= $endgame->linguage ?></p>
                <p>voto: <?= $endgame->vote ?></p>
            </div>
            <div class="col">
                <h2><?= $il_risveglio_della_forza->title ?></h2>
                <p>lingua: <?= $il_risveglio_della_forza->linguage ?></p>
                <p>voto: <?= $il_risveglio_della_forza->vote ?></p>
            </div>
            <div class="col">
                <h2><?= $maverick->title ?></h2>
                <p>lingua: <?= $maverick->linguage ?></p>
                <p>voto: <?= $maverick->vote ?></p>
            </div>
        </div>
    </div>

</body>

</html>