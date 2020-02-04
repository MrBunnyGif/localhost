<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Localhost</title>
    <style>
        #caixa{
            height: 400px;
            width: 600px;
            margin: auto;
            background-color:#4d4d4d;
            border-radius: 4px;
            box-shadow: 15px 15px black;
            transition-duration: .3s;
        }
        #conteudo{
            height: 400px;
            width: 600px;
            padding: 10px;
        }
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
        }
        #caixa:hover {
            box-shadow: 25px 25px black;
            border-radius: 10px;
        }
        a{
            color: white;
        }
        .subtitulo{
            margin-top: 0;
        }
        #listagem{
            max-height: 240px;
            width: 580px;
            overflow: auto;
            box-shadow: 0px 5px 10px -7px black;
            border-radius: 5px;
        }
    </style>
</head>
    <body>
        <div id="total">
            <div id="caixa">
                <div id="conteudo">
                    <h1>
                        Início da pasta 'LocalHost'
                    </h1>
                    <h3 class="subtitulo">
                        Listagem das pastas:
                    </h3>
                    <div id="listagem">
                        <?php
                            // $path = 'C:\xampp\htdocs';
                            // $diretorio = dir($path);
                            // while($arquivo = $diretorio -> read()){
                            //     echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
                            // }
                            // $diretorio -> close();
                            
                            $dir = scandir('C:\xampp\htdocs');
                                foreach ($dir as $d){
                                echo $d."<br>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>