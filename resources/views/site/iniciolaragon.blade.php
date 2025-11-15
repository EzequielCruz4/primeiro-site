<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal - Projetos Laragon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8; /* Um azul bem claro/cinza */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 50px 70px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.5em;
            margin-top: 0;
            margin-bottom: 40px;
            color: #0056b3; /* Azul escuro */
        }
        .botoes-container {
            display: flex;
            gap: 30px; /* Espaço entre os botões */
        }
        .botao-link {
            display: block;
            padding: 25px 50px;
            text-decoration: none;
            font-size: 1.5em;
            font-weight: bold;
            color: #ffffff;
            border-radius: 8px;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Cor específica para cada botão */
        .botao-empresa {
            background-color: #007bff; /* Azul primário */
        }
        .botao-empresa:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .botao-loja {
            background-color: #D4AF37; /* Dourado (da loja) */
            color: #333; /* Texto escuro para contraste com dourado */
        }
        .botao-loja:hover {
            background-color: #b89a30;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Meus Projetos</h1>
        <div class="botoes-container">
            
            <a href="http://primeiro-site.test/empresa" class="botao-link botao-empresa">
                Empresa
            </a>

            <a href="http://primeiro-site.test/loja" class="botao-link botao-loja">
                Loja
            </a>
        </div>
        <p style="margin-top: 30px; color: #777;">
            Testando o ambiente Laragon - <?php echo date('Y'); ?>
        </p>
    </div>

</body>
</html>