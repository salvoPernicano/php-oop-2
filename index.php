<?php
include_once __DIR__ . './models/Product.php';
include_once __DIR__ . './models/Food.php';

$cuccia = new Product('cuccia', '12,99');
$croccantini = new Food('cibo per cani', '6,99', 'croccantini', '200');

var_dump($cuccia,$croccantini);

$arrayProdotti = [
    $cuccia,
    $croccantini
];
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach($arrayProdotti as $element) { ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= $element->displayTitle() ?></h4>
                        <div class="card-text"><?= $element->displayPrice() ?></div>
                        <div class="card-text"><?= $element->displayType() ?></div>
                    </div>
                </div>
                
            </div>
            <?php } ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>