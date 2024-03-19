<?php
// Exemple de données de produits (vous pouvez remplacer par vos propres données)
$products = [
    ['image' => 'product1.jpg', 'name' => 'Produit 1', 'price' => '10.99'],
    ['image' => 'product2.jpg', 'name' => 'Produit 2', 'price' => '15.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99'],
    ['image' => 'product3.jpg', 'name' => 'Produit 3', 'price' => '20.99']
];

foreach ($products as $product) {
    echo '<div class="carousel-item">';
    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
    echo '<h3>' . $product['name'] . '</h3>';
    echo '<p>Prix : €' . $product['price'] . '</p>';
    echo '</div>';
}
?>