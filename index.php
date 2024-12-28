<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation des Projets</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #003366;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            width: 90%;
            margin: auto;
            max-width: 1200px;
            padding: 20px;
        }

        .project {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
        }

        .project img {
            width: 200px;
            height: auto;
        }

        .project-content {
            padding: 20px;
            flex: 1;
        }

        .project-content h2 {
            margin-top: 0;
            color: #003366;
        }

        .project-content p {
            margin: 10px 0;
        }

        .highlight {
            background-color: #dff9fb;
            border: 2px solid #003366;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #003366;
            color: #fff;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Mes Projets</h1>
    </header>

    <div class="container">
        <!-- Project 1: File Transfer Application -->
        <a href="we_transfert/index.php">
            <div class="project highlight">
                <img src="x.webp" alt="Logo Application de Transfert de Fichiers">
                <div class="project-content">
                    <h2>Application de Transfert de Fichiers</h2>
                    <p>Une application moderne et intuitive pour transférer vos fichiers en toute sécurité et rapidité. Fonctionnalités incluses : interface conviviale, transferts chiffrés, et gestion simplifiée des fichiers.</p>
                    <p><a href="#" style="color: #003366; text-decoration: underline;">Voir les détails du projet</a></p>
                </div>
            </div>
        </a>

    </div>

    <footer>
        <p>&copy; 2024. Tous droits réservés.</p>
    </footer>
</body>

</html>


<style>
    a{
        text-decoration: none;
        color: black;
    }
</style>