<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $pasta_local = basename(__DIR__);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $pasta_local ?>
    </title>
    <link rel="shortcut icon" href="https://i.imgur.com/O7CRS3b.png">
    <link rel="stylesheet" type="text/css" href="http://localhost/styles.css"/>
</head>
    <body>
        <div id="total">
            <div id="caixa">
                <div id="conteudo">
                    <h1>
                        Listagem para pasta '<?php echo basename(__DIR__); ?>'
                    </h1>
                    <h3 class="subtitulo">
                        Listagem das pastas:
                    </h3>
                    <div id="listagem">
                        <?php
                            $dir = scandir(dirname(__FILE__));
                            foreach ($dir as $d){
                                echo '<ul>'.'<li>'.'<a href="http://localhost/'.$d.'">'.$d.'<br>'.'</a>'.'</li>'.'</ul>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>