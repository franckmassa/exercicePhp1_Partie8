<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <!-- Affiche l'adress l'utilisateur -->
        <p>
            User Agent : <?= $_SERVER['HTTP_USER_AGENT']; ?>     
        </p> 
        <!-- Affiche l'adresse IP pour l'utilisateur -->
        Adresse IP : <?= $_SERVER['REMOTE_ADDR']; ?>
    </p>
    <!-- Affiche le nom du serveur -->
    <P>
        Nom du Serveur : <?= $_SERVER['SERVER_NAME']; ?>
    </P>
</body>
</html>
