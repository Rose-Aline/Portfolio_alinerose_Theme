<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur 404 - Page non trouvée</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php get_header(); ?> <!-- Inclusion de l'en-tête -->
    <div class="container" style="text-align: center;">
        <h1>Erreur 404 </h1>
        
        <p>Désolé, la page que vous recherchez est introuvable.</p>
        <button class="button"><a href="https://alinerose.fr/">Retour à la page d'accueil</a></button>
    </div>
    <?php get_footer(); ?> <!-- Inclusion du pied de page -->

    <script type="text/javascript">
        setTimeout(function() {
            window.location.href = "index.php";
        }, 5000); 
    </script>

    
</body>
</html>
