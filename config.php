<?php
require_once('connect.php');
error_reporting(E_ALL);
$categoriesPL = $conn->prepare('SELECT categories.*, sites.site_id,sites.url FROM categories JOIN sites ON sites.site_id = categories.site_id WHERE sites.lang = "pl" ');
$categoriesEN = $conn->prepare('SELECT categories.*, sites.site_id,sites.url FROM categories JOIN sites ON sites.site_id = categories.site_id WHERE sites.lang = "en" ');
$menuPL = $conn->prepare("SELECT * FROM menu WHERE menu_lang = 'pl'");
$menuEN = $conn->prepare("SELECT * FROM menu WHERE menu_lang = 'en'");
$menuPL->execute();
$menuEN->execute();
$categoriesPL->execute();
$categoriesEN->execute();
$resultPL = $categoriesPL->fetchAll();
$resultEN = $categoriesEN->fetchAll();
$menu_PL = $menuPL->fetchAll();
$menu_EN = $menuEN->fetchAll();
if ($_COOKIE["lang"] == "pl") {
    foreach ($menu_PL as $mPL) {
        $menu_id = $mPL["menu_id"];
        $menu_name = $mPL["menu_name"];
        $menu_href = $mPL["menu_href"];
        $menuArr .= '
               <li><a href="' . $menu_href . '" class="main">' . $menu_name . '</a></li>
       ';
    }
}
if ($_COOKIE["lang"] == "en") {
    foreach ($menu_EN as $mEN) {
        $menu_id = $mEN["menu_id"];
        $menu_name = $mEN["menu_name"];
        $menu_href = $mEN["menu_href"];
        $menuArr .= '
               <li><a href="' . $menu_href . '" class="main">' . $menu_name . '</a></li>
       ';
    }
}