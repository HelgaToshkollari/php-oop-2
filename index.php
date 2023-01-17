<?php
require_once  "./classes/Product.php";
require_once  "./classes/Category.php";
require_once "./productList.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>

    <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col justify-content-center d-flex flex-wrap gap-2">

                        <?php foreach($productList as $product){ ?>

                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo $product->getProduct_img()?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $product->getName() ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"> <?php echo $product->getCategory()?></h6>
                                    <p class="card-text">Descrizione:
                                        <br> <?php echo $product->getDescription() ?></p>
                                    <p class="card-text">Costo : <?php echo $product->getPrice() ?></p>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>

    </main>
    
</body>
</html>