<?php
    $titulo = basename(__DIR__);
    $list = dirname(__FILE__);
    include_once('nav.php');

    $foldername = $_POST["folder-name"];
    mkdir($foldername, 777);
?>