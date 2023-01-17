<?php
require_once "./classes/Product.php";
require_once "./classes/Category.php";
require_once "./classes/Food.php";

$catCategory= new Category ("Gatto","fa-solid fa-cat");
$dogCategory= new Category ("Cane","fa-solid fa-dog");

$productList =[
    new Food ("https://shop-cdn-m.mediazs.com/bilder/fai/scorta/almo/nature/daily/menu/x/g/0/800/27534_pla_almo_nature_huhn_lachs_70g_0.jpg","Almo Nature Daily 6 x 70 g", $catCategory, "Daily di Almo Nature è un alimento umido costituito da bocconcini di carne e pesce altamente digeribili.", "€ 3,79" ),  
    new Product("https://shop-cdn-m.mediazs.com/bilder/lettiera/tigerino/crystals/lavanda/6/400/27104_pla_tigerino_crystals_lavender_5l_1000x1000_6.jpg","Lettiera Tigerino Crystals Lavanda",$catCategory,"Lettiera in silicio per gatti","€ 8,29"),
    new Product("https://shop-cdn-m.mediazs.com/bilder/catessy/sticks/x/g/4/800/69510_pla_catessy_sticks_bbqturkey_4.jpg","Catessy Sticks",$catCategory,"Bastoncini snack Catessy Sticks per gatti","€ 1,69"),
    new Product("https://shop-cdn-m.mediazs.com/bilder/sottociotola/mimi/4/400/73362_pla_napfunterlage_katze_mimi_ret_4.jpg","Sottociotola Mimi",$catCategory,"Grazioso sottociotola Mimi per evitare che il gatto sporchi il pavimento mentre consuma il suo pasto","€ 2,29"),
    new Product("https://shop-cdn-m.mediazs.com/bilder/paletta/a/setaccio/per/lettiera/6/400/65112_pla_streuschaufel_fg_dsc6276_6.jpg","Paletta a setaccio per lettiera",$catCategory,"Paletta a setaccio per la toilette del gatto, ideale per lettiere a grana grossa, come quelle agglomeranti e al silicio.","€ 2,19"),
    new Food("https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/con/pesce/azzurro/fresco/8/800/26973_pla_almonature_fettfisch_reis_12kg_8.jpg","Almo Nature Holistic con Pesce Azzurro Fresco",$catCategory,"Crocchette gustose e digeribili.","€ 3,79"),
    new Product("https://shop-cdn-m.mediazs.com/bilder/nicchia/royal/pet/white/5/800/55600_PLA_Kuschelhoehle_Royal_Pet_White_FG_DSC9020_5.jpg","Nicchia Royal Pet White",$catCategory,"Nicchia Royal Pet White bianca con ricamo nero a forma di corona, per gatti grandi e per cani di piccola taglia.","€ 37,99"),
    new Product ("https://www.monge.it/wp-content/uploads/2016/04/monge_cane_secco_all_breeds_adult_monoprotein_agnello_con_riso_e_patate.jpg","Monge All Breeds Adult Agnello Riso e Patate",$dogCategory,"Monge Natural Superpremium All Breeds con Agnello, Riso e Patate sono delle golose crocchette indicate per i cani adulti","€16,99"),
    new Product("https://arcaplanet.vtexassets.com/arquivos/ids/276649/mr-pet-trasportino-grigio-per-cane.jpg?v=1759859814&quality=1&width=80&height=80","Trasportino per Cane Mr Pet",$dogCategory,"Trasportino per cane di Mr Pet: l'accessorio ideale per viaggi in aereo con Fido.","€6,50")

]

?>