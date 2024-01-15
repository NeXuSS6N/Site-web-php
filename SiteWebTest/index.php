<?php 
// index.php
session_start();

// Si l'utilisateur est connecté, on récupère son identité via la session.
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page d'accueil</title>
 <style>
        body {
	    background-image: url('https://wallpapercave.com/wp/wp2406611.jpg');
            text-align: center;
            font-family: Arial, sans-serif;
            color: white;
        }

        h1 {
            font-size: 3rem;
            margin-top: 30vh;
	    color: white;
        }

        button {
            font-size: 1.5rem;
            padding: 10px 20px;
            cursor: pointer;
            background-color: transparent;
            border: 2px solid white;
            color: white;
            margin-top: 20px;
        }

        button:hover {
            background-color: black;
	    color: white	
        }
    </style>
    </head>
    <body>
<h2>Bienvenu !</h2>
    <button onclick="prank()">Clique pour avoir le login</button>
    <script>
        function prank() {
            alert(" Login : admin@example.com Password : Secur1ty");
        }
    </script>
        <h1>Page d'accueil</h1>
        <?php if ($identity==null): ?>
        <a href="login.php">Connexion</a>
        <?php else: ?>
        <strong>Bienvenue, <?= $identity ?></strong> <a href="logout.php">Déconnexion</a>
        <?php endif; ?>
        
        <p>
           A
	   <br>
	   B 
        </p>
    </body>
</html>
