<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice1</title>
        <meta charset="utf-8" />     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="bg-info d-inline-block text-center rounded font-weight-bold m-5 p-5" style="font-size: 30px;">
            <!-- Affiche l'adress l'utilisateur -->
            <p>User Agent : <?= $_SERVER['HTTP_USER_AGENT']; ?></p> 
            <!-- Affiche l'adresse IP pour l'utilisateur -->
            <p>Adresse IP : <?= $_SERVER['REMOTE_ADDR']; ?></p>
            <!-- Affiche le nom du serveur -->
            <P>Nom du Serveur : <?= $_SERVER['SERVER_NAME']; ?></P> 
        </div>  
    </body>
</html>
