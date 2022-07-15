<!-- L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php

require_once "./classi/products.php";
require_once "./classi/games.php";
require_once "./classi/customer.php";
require_once "./classi/food.php";
require_once "./classi/cart.php";

$customer = new Customer();
$customer->register("Giulia", "Verdi");

$games1 = new Games("corda", 10.50, "verde" , 10);
$games2 = new Games("Lettino",2.50, "rosso", 15);

$food1 = new Food("Carne in scatola", 10.00, 250 , "manzo,riso,pesce");
$food2 = new Food("crocchette",5.00, 150, "pollo,farina");

// var_dump($customer);

$customer->cart->add($games2, $food2, $games1);

// var_dump($customer);
echo $customer->printHtml();
echo $games1->printHtml();
echo $games2->printHtml();
echo $food2->printHtml() . "<br>";
echo " <strong>Il totale del carrello è:</strong> " . $customer->cart->getTotal();


// var_dump($customer);
// var_dump($products);
// var_dump($games);
// var_dump($food);
