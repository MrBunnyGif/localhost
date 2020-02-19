<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
            $titulo ;
        ?>
    </title>
    <link rel="shortcut icon" href="https://i.imgur.com/O7CRS3b.png">
    <link rel="stylesheet" type="text/css" href="../styles.css"/>
    <link rel="stylesheet" type="text/css" href="../styles.css"/>
</head>
    <body>
        <div id="total">
            <div id="caixa">
                <div class="conteudo">
                    <h1>
                        Listagem para pasta '<?php echo $titulo; ?>'
                    </h1>
                    <h3 class="subtitulo">
                        Listagem das pastas:
                    </h3>
                    <div id="listagem">
                    <?php
                        $dir = scandir($list);
                        foreach ($dir as $d){
                            echo '<ul>'.'<li>'.'<a href="'.$d.'">'.$d.'<br>'.'</a>'.'</li>'.'</ul>';
                        }
                    ?>
                    </div>
                </div>
                <footer>
                    <button id="newFolder">
                        nova pasta
                    </button>
                    <button id="newFile">
                        novo arquivo
                    </button>
                </footer>
            </div>
            <div class="criacao" id="cArquivo">
                <div class="conteudo">
                    <h2>
                        Criar arquivo
                    </h2>
                    <div>
                        <form action="">
                            <div>
                                <input type="text" placeholder="Nome do arquivo">
                                <select name="" id="">
                                    <option value=".txt">txt</option>
                                    <option value=".php">php</option>
                                    <option value=".js">javaScript</option>
                                    <option value=".html">html</option>
                                    <option id="form-outro" value="">outro</option>
                                </select>
                            </div>
                            <hr class="formHr">
                            <input value="Criar" type="submit" class="submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="criacao " id="cPasta">
                <div class="conteudo">
                    <h2>
                        Criar pasta
                    </h2>
                    <div>
                        <form action="">
                            <div>
                                <input type="text" placeholder="Nome do arquivo">
                            </div>
                            <hr class="formHr">
                            <input value="Criar" type="submit" class="submit">
                        </form>
                    </div>
                </div>
            </div>
            <div id='fundo'></div>
        </div>
        <script src="../scripts.js"></script>
    </body>
</html>