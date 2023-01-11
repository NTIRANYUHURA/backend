<?php
function cardCatalogue( string $image, string $titre, $prix, string $description, int $id){
    echo '<div>';
    echo '<img src="'.$image.'"width:10%;"/>';
    echo '<p>'.$titre.'</p>';
    echo '<p>'.$prix.'</p>';
    echo '<p>'.$description.'</p>';
    echo '<a href="produit.php?voir='.$id.'"><button >Voir</button></a> </div>';
}
?>