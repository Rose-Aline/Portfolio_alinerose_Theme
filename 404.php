<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .footer {
            width: 100%;
            text-align: center;
            background-color: #f8f9fa;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
        }
    </style>

</head>
<body>
    <div class="content">
        <?php include 'header.php'; ?> <!-- Inclusion de l'en-tête -->
        <h1>Erreur 404 - Page non trouvée</h1>
        <p>Désolé, la page que vous recherchez est introuvable.</p>
        <button class="button" onclick="returnToMenu()">Retour à la page d'accueil</button>
    </div>

    <script type="text/javascript">
        function returnToMenu() {
            window.location.href = "https://alinerose.fr/";
        }

        setTimeout(function() {
            window.location.href = "https://alinerose.fr/";
        }, 5000); 
    </script>
    <?php include 'footer.php'; ?> <!-- Inclusion du pied de page -->
</body>
</html>
