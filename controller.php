<?php
if (empty($_GET['mon_an'])) {
    include 'menu.php';
} else {
    $mon_an = $_GET['mon_an'];
    include 'model.php';
    include 'dia.php';
    include './view/index.php';
}