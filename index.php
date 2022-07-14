<!-- L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php

require_once "./classi/products.php";
require_once "./classi/games.php";
require_once "./classi/customer.php";
require_once "./classi/food.php";

$customer = new Customer("Giulia", "Verdi","PayPal");
$products =  new Products("€", "Prodotti per animali");
$games = new Games(10.50, "corda", "verde" , 10);
$food = new Food("Carne in scatola", 10.00, 250 , "manzo,riso,pesce");

echo $customer->printHtml();
echo $games->printHtml();
echo $food->printHtml();

// var_dump($customer);
// var_dump($products);
// var_dump($games);
// var_dump($food);
