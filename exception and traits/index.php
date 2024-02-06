<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include __DIR__ . '/models/db.php'; ?>

    <div class="wrap">
        <?php foreach ($array_prod as $product) { ?>

            <div class="card" style="width: 18rem;">

                <div class="card-body">

                    <h3 class="card-title"><?php echo $product->getTitle(); ?> </h3>
                    <h5 class="card-text"> <?php echo $product->getType();?> </h5>
                    <p class="card-text"> <?php echo $product->getDescription();?> </p>
                    <h3 class="card-text"><?php echo $product->getPrice();?></h3>
                    <h4 class="card-text"><?php echo $product->get();?></h4>
                    <h4 class="card-text"><?php echo $product->getCategory()->getName();?></h4>

                </div>

            </div>
            
        <?php } ?>
        
    </div>
    

    </div>
</body>
</html>