<?php
    $titulo = basename(__DIR__);
    $list = dirname(__FILE__);
    include_once('nav.php');

    $filename = $_POST["file-name"];
    $type = $_POST["tipo"];
    file_put_contents($filename.$type,"Olá Mundo!");
?>