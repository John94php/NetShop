<?php
require_once('config.php');

?>
<html lang="pl">
<head>
    <title>NetShop</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/main.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="lang">
    <span>Wybierz swój język</span>

    <select name="lang">
        <option value="pl"><a onclick="changelang()">Polski</option>
        <option value="en"><a onclick="changelang()">Angielski</option>
    </select>
</div>
<nav class="main">
    <ul>
        <?=$menuArr?>
    </ul>
</nav>
<article>
    Witaj na stronie internetowej NetShop. W zakładce Katalog znajdziesz wszystkie nasze produkty z podziałem na
    kategorie. Zapraszamy i życzymy udanych zakupów
</article>
</body>
</html>