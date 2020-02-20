<?php
    $filename = $_POST["file-name"];
    $type = $_POST["tipo"];
    file_put_contents($filename.$type,"davisu!");
?>