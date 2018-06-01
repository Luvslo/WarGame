<?php

require_once 'bootstrap.php';

if (isset($_GET['army1']) && isset($_GET['army2'])) {
    $army1 = htmlentities($_GET['army1']);
    $army2 = htmlentities($_GET['army2']);
}

$init = new Battlefield(new Humans($army1), new Zombies($army2));