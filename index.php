<!-- creare uno shop online;
 ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
 Strutturare le classi gestendo l’ereditarietà dove necessario;
 ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi
 oppure diverse tipologie di prodotti. -->
<?php 

   require_once __DIR__ . '/classes/User.php';
   require_once __DIR__ . '/classes/Product.php';
   require_once __DIR__ . '/classes/CreditCard.php';
   require_once __DIR__ . '/classes/PrimeUser.php';

   $new_user = new User('Luigi', 'Verde');
   
   $new_product = new Product('Monta latte elettrico', 51.87);
   
   $new_creditCard = new CreditCard(6456547675654, 421, 02, 26);
   $new_creditCard2 = new CreditCard(453654676554, 141, 06, 27);
   
   $new_primeUser = new PrimeUser('Ludovico', 'Einaudi');
   $new_user->setCreditCard($new_creditCard);
   $new_primeUser->setCreditCard($new_creditCard2);
   $new_user->hasPurchased($new_product);
   $new_primeUser->hasPurchased($new_product);
   var_dump($new_product);
   var_dump($new_user);
   var_dump($new_primeUser);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shop</title>
</head>
<body>

   <h3>L'utente <?php echo "{$new_user->getFirstname()} {$new_user->getLastname()}";?>
   </h3>
   <h3>ha acquistato: <?php echo $new_product->getTitle() ?></h3>
   <h3>col prezzo originale di <?php echo $new_user->getDiscountedPrice() ?>€</h3>
   <h3>scontato del <?php echo $new_user->getDiscountPercentage(); ?> %</h3>
   <h3>con la carta <?php echo $new_user->getCreditCard()->getCardNumber() ?></h3>
   <br>
   <br>
   <h3>L'utente <?php echo "{$new_primeUser->getFirstname()} {$new_primeUser->getLastname()}";?>
   </h3>
   <h3>ha acquistato: <?php echo $new_product->getTitle() ?></h3>
   <h3>col prezzo scontato di <?php echo $new_primeUser->getDiscountedPrice();?> €</h3>
   <h3>scontato del <?php echo $new_primeUser->getDiscountPercentage(); ?> %</h3>
   <h3>con la carta <?php echo $new_primeUser->getCreditCard()->getCardNumber() ?></h3>

</body>
</html>