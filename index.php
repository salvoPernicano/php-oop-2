<?php
include_once __DIR__ . './models/Product.php';
include_once __DIR__ . './models/Food.php';
include_once __DIR__ . './models/Toys.php';

$cuccia = new Product('lettiera', '12,99','10' ,'cat');
$croccantini = new Food('cibo per cani','6,99','dog','20', 'croccantini','1500');
$pallaTennis = new Toy('Palla da Tennis', '3.99','10','dog', 'Palla' );

var_dump($cuccia,$croccantini, $pallaTennis);

$arrayProdotti = [
    $cuccia,
    $croccantini,
    $pallaTennis
];
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach($arrayProdotti as $element) { ?>
            <div class="col">
                <div class="card">
                <img id="icon" src="<?= $element->animalIcon ?>" alt="Animal Icon">
                    <img class="card-img-top" src="https://plus.unsplash.com/premium_photo-1666739387925-5841368970a7?q=80&w=1953&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?= $element->displayTitle() ?></h4>
                        <div class="card-text"><?= $element->displayPrice() ?></div>
                        <div class="card-text"><?= $element->displayType() ?></div>
                        <div class="card-text">Quantità: <?= $element->getQuantity() ?></div>
                    </div>
                </div>
                
            </div>
            <?php } ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>