<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazy Load</title>
    <style>
        article{
            border: 2px dashed black;
            height: 600vh;
        }
        .lazy-img{
            margin: auto;
            width: 500px;
            height: 700px;
            border: 2px solid gray;
            margin-top: 150vh;
        }
    </style>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <article class="teste">
        <div class="lazy-img">
            <img src="" data-url="https://i.imgur.com/vVf35xV.jpg" width="495px" alt="">
        </div>
    </article>
</body>
</html>