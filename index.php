<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-oop-2</title>
  </head>
  <body>
    <?php
      require_once 'Models/products.php';
      require_once 'Models/category.php';
      require_once 'Models/food.php';
      require_once 'Models/game.php';
      require_once 'Models/house.php';
      require_once 'db.php';
    ?>

    <?php if(empty($error_message)): ?>
    <h3 class="text-center"><?php echo $error_message ?></h3>
    <div class="container d-flex flex-column align-items-center mt-5">
      <?php foreach ($products as $product): ?>
        <div class="card col-md-6 mb-3">
          <div class="card-body text-center">
            <h5 class="card-title"><?php echo $product->getTitle(); ?></h5>
            <h6 class="card-title">Tipologia: <?php echo $product->getTypology(); ?></h6>
            <p class="card-text">Immagine: <?php echo $product->getImage(); ?></p>
            <p class="card-text">Prezzo: <?php echo $product->getPrice(); ?>€</p>
            <p class="card-text">Categoria: <?php echo $product->getCategory()->getCategoryName(); ?></p>
            <p class="card-text">Icona: <?php echo $product->getCategory()->getCategoryIcon(); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php else: ?>
      <h3 class="text-center"><?php echo $error_message ?></h3>
    <?php endif; ?> 
  </body>
</html>