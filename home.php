<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de vente d'objets de seconde main</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="produits.php">Produits</a></li>
                <li><a href="categories.php">Catégories</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="carousel">
        <?php include 'carousel_item.php'; ?>
    </div>
       
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Site de vente d'objets de seconde main. Tous droits réservés.</p>
    </footer>
</body>
</html>
