<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="width=device-width,  initial-scale=1.0"/>
    <title>MyBd.fr - Search</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link rel="apple-touch-icon" href="img/logo-114.png" sizes="114x114" />
    <link rel="apple-touch-icon" href="img/logo-72.png" sizes="72x72" />
    <link rel="apple-touch-icon" href="img/logo-57.png" sizes="57x57" />
    <link rel="apple-touch-startup-image" href="img/splash-touch.png"/>
</head>
<body>
    <header class="wrapper">
        <a id="header" href="index.php">
            <img class="logo" src="img/logo-72.png"/>
            <hgroup class="titre">
                <h1>MyBd.fr</h1>
                <h2>Plein d'infos sur les BD !</h2>
            </hgroup>
        </a>
    </header>
    <br class="clear"/>
    
    <nav id="menu" class="wrapper">
        <ul>
            <li><a href="search.php">Search</a></li>
            <li><a href="last.php">Last</a></li>
            <li><a href="random.php">Random</a></li>
            <li><a href="legal.php">Legal</a></li>
        </ul>
    </nav>
    <br class="clear"/>
    
    <section class="content">
        <form class="searchForm" name="formSearch" method="GET" action="search.php"> 
            <div>
                <label for="author">Auteur :</label>
                <input id="author" type="text" />
            </div>
            <div>
                <label for="nationality">Nationalité :</label>
                <input id="nationality" type="text" />
            </div>
            <div>
                <label for="title">Titre :</label>
                <input id="title" type="text" />
            </div>
            <div>
                <label for="year">Année :</label>
                <input id="year" type="text" />
            </div>
            <div>
                <label for="price">Prix :</label>
                <input id="price" type="text" />
            </div>
            <div>
                <label for="dispo">Dispo :</label>
                <input id="dispo" type="text" />
            </div>
            <input type="submit" />
        </form>
    </section>
    
    <nav id="footer" class="wrapper">
        <footer>
            <ul>
                <li><a href="search.php">Search</a></li>
                <li><a href="last.php">Last</a></li>
                <li><a href="random.php">Random</a></li>
                <li><a href="legal.php">Legal</a></li>
            </ul>
        </footer>
    </nav>
</body>
</html>
