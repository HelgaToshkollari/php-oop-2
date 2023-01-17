<?php
require_once "./classes/Product.php";
require_once "./classes/Category.php";
require_once "./classes/Food.php";

$catCategory= new Category ("Gatto","fa-solid fa-cat");
$dogCategory= new Category ("Cane","fa-solid fa-dog");

$productList =[
    new Food ("Almo Nature Daily 6 x 70 g", $catCategory, "Daily di Almo Nature è un alimento umido costituito da bocconcini di carne e pesce altamente digeribili.", "€ 3,79" ),  
    new Product("Lettiera Tigerino Crystals Lavanda",$catCategory,"Lettiera in silicio per gatti","€ 8,29"),
    new Product("Catessy Sticks",$catCategory,"Bastoncini snack Catessy Sticks per gatti","€ 1,69"),
    new Product("Sottociotola Mimi",$catCategory,"Grazioso sottociotola Mimi per evitare che il gatto sporchi il pavimento mentre consuma il suo pasto","€ 2,29"),
    new Product("Paletta a setaccio per lettiera",$catCategory,"Paletta a setaccio per la toilette del gatto, ideale per lettiere a grana grossa, come quelle agglomeranti e al silicio.","€ 2,19"),
    new Product("Almo Nature Holistic con Pesce Azzurro Fresco",$catCategory,"Crocchette gustose e digeribili.","€ 3,79"),
    new Product("Nicchia Royal Pet White",$catCategory,"Nicchia Royal Pet White bianca con ricamo nero a forma di corona, per gatti grandi e per cani di piccola taglia.","€ 37,99"),
    new Product ("Monge All Breeds Adult Agnello Riso e Patate",$dogCategory,"Monge Natural Superpremium All Breeds con Agnello, Riso e Patate sono delle golose crocchette indicate per i cani adulti","€16,99"),
    new Product("Trasportino per Cane Mr Pet",$dogCategory,"Trasportino per cane di Mr Pet: l'accessorio ideale per viaggi in aereo con Fido.","€6,50")

]

?>