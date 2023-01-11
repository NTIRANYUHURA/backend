<?Php
require 'config/init.php';
$tousProduits = $db->query('SELECT * FROM produit ORDER BY id DESC');
if(isset($_GET['search']) AND !empty($_GET['search'])){
    $recherche =htmlspecialchars($_GET['search']);
    $sql ='SELECT * FROM produit WHERE titre LIKE "%'.$recherche.'%" or prix LIKE "%'.$recherche.'%" or description LIKE "%'.$recherche.'%" or image LIKE "%'.$recherche.'%"ORDER BY id DESC';
    $tousProduits=$db->query($sql);
    $tousProduits->execute();
}
?>
<h1>Rechercher des produits</h1>
<form action = "catalogue.php" method = "GET" >
    <input type = "search" name="search" placeholder="rechercher un produit">
    <input type = "submit" name="voir" value="voir">
</form>
<?php
include 'components/cardCatalogue.php';
$rows = $tousProduits->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $p){
    cardCatalogue($p['image'],$p['titre'], $p['prix'], $p['description'],$p['id'] );
}
?>
<?php
include 'includes/footer.html'
?>

