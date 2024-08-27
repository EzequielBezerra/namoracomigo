<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quer Namorar Comigo?</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1502920917128-1aa500764b36'); /* Imagem de fundo bonita */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: white;
            text-shadow: 1px 1px 4px #000;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        #nao-btn {
            position: absolute;
        }
    </style>
    <script>
        function moverBotao() {
            var btn = document.getElementById("nao-btn");
            btn.style.top = Math.random() * (window.innerHeight - 50) + "px";
            btn.style.left = Math.random() * (window.innerWidth - 50) + "px";
        }
    </script>
</head>
<body>

<div class="container">
    <h1>Você quer namorar comigo?</h1>
    <div class="mt-4">
        <a href="https://youtu.be/-dy1uuJa-vw?si=ZefVy_8rCfx0K_pd" target="_blank" class="btn btn-success btn-lg">Sim</a>
        <button id="nao-btn" class="btn btn-danger btn-lg" onmouseover="moverBotao()">Não</button>
    </div>
</div>

<!-- Bootstrap JS e dependências -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
