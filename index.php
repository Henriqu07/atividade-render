<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação PHP na Nuvem</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        main {
            max-width: 620px;
            margin: 24px;
            padding: 36px;
            background: #fff;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 18px rgba(0,0,0,.10);
        }
        h1 { color: #276749; }
        p { color: #444; line-height: 1.6; }
    </style>
</head>
<body>
<main>
    <h1>Aplicação PHP na Nuvem</h1>
    <p>Esta aplicação foi desenvolvida em PHP e preparada com Docker.</p>
    <p><strong>Disciplina:</strong> Cloud Computing</p>
    <p><strong>Modelo de serviço:</strong> PaaS (Platform as a Service)</p>
    <p><strong>Data do servidor:</strong> <?php echo date("d/m/Y"); ?></p>
    <p>Aplicação publicada com Render.</p>
</main>
</body>
</html>
