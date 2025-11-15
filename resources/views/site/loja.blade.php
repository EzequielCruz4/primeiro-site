<?php
// --- INÍCIO DA LÓGICA PHP (Simulação de Banco de Dados) ---

// Função auxiliar para formatar moeda
function formatar_moeda($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}

// Simula a lista de produtos que viria do banco de dados
$produtos = [
    [
        "id" => 1,
        "nome" => "Banho de 7 Ervas (Líquido)",
        "descricao" => "Mistura de ervas para descarrego e purificação energética.",
        "preco" => 25.90,
        "categoria" => "Banhos",
        "imagem_url" => "https://via.placeholder.com/300x300.png?text=Banho+7+Ervas"
    ],
    [
        "id" => 2,
        "nome" => "Imagem de Iemanjá (Resina - 20cm)",
        "descricao" => "Estátua da Rainha do Mar, protetora dos lares e da família.",
        "preco" => 79.90,
        "categoria" => "Imagens",
        "imagem_url" => "https://via.placeholder.com/300x300.png?text=Imagem+Iemanj%C3%A1"
    ],
    [
        "id" => 3,
        "nome" => "Vela Palito Branca (Maço)",
        "descricao" => "Maço com 8 velas brancas para firmeza e iluminação.",
        "preco" => 8.50,
        "categoria" => "Velas",
        "imagem_url" => "https://via.placeholder.com/300x300.png?text=Vela+Branca"
    ],
    [
        "id" => 4,
        "nome" => "Imagem de São Jorge (Resina - 15cm)",
        "descricao" => "Santo guerreiro, protetor contra o mal e as demandas.",
        "preco" => 55.00,
        "categoria" => "Imagens",
        "imagem_url" => "https://via.placeholder.com/300x300.png?text=Imagem+S%C3%A3o+Jorge"
    ],
    [
        "id" => 5,
        "nome" => "Defumador em Tablete (Arruda)",
        "descricao" => "Caixa com 20 tabletes para defumação e limpeza de ambientes.",
        "preco" => 12.00,
        "categoria" => "Defumação",
        "imagem_url" => "https://via.placeholder.com/300x300.png?text=Defumador+Arruda"
    ],
    [
        "id" => 6,
        "nome" => "Banho de Sal Grosso e Alecrim",
        "descricao" => "Para renovação das energias e abertura de caminhos.",
        "preco" => 18.90,
        "categoria" => "Banhos",
        "imagem_url" => "https://via.placeholder.com/300x300.png?text=Banho+Alecrim"
    ]
];

// --- FIM DA LÓGICA PHP ---
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa da Fé - Artigos Religiosos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f9f7f4; /* Um tom de bege bem claro */
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- Cabeçalho e Navegação --- */
        .header {
            background-color: #ffffff;
            border-bottom: 2px solid #D4AF37; /* Dourado/Ocre */
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.8em;
            font-weight: bold;
            color: #004a91; /* Azul profundo */
        }
        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .nav-links li {
            display: inline-block;
            margin-left: 25px;
        }
        .nav-links a {
            text-decoration: none;
            color: #555;
            font-weight: bold;
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: #D4AF37;
        }

        /* --- Banner de Destaque --- */
        .hero {
            background-color: #004a91; /* Azul profundo */
            color: #ffffff;
            padding: 60px 20px;
            text-align: center;
            margin-top: 20px;
        }
        .hero h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .hero p {
            font-size: 1.2em;
            opacity: 0.9;
        }

        /* --- Seção de Produtos --- */
        .produtos-secao {
            padding: 40px 0;
        }
        .produtos-secao h2 {
            text-align: center;
            font-size: 2em;
            color: #333;
            margin-bottom: 30px;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        /* --- Grade de Produtos --- */
        .produtos-grid {
            display: grid;
            /* Cria colunas responsivas:
               - Em telas pequenas: 1 coluna
               - Em telas médias: 2 colunas
               - Em telas grandes: 3 colunas
            */
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        /* --- Card de Produto --- */
        .produto-card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            overflow: hidden; /* Para o radius funcionar na imagem */
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column; /* Garante que o conteúdo se empilhe verticalmente */
        }
        .produto-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        .produto-imagem {
            width: 100%;
            height: 250px;
            object-fit: cover; /* Garante que a imagem cubra o espaço */
            background-color: #eee;
        }
        .produto-info {
            padding: 20px;
            flex-grow: 1; /* Faz esta div crescer para preencher o espaço */
            display: flex;
            flex-direction: column;
        }
        .produto-info h3 {
            font-size: 1.3em;
            margin: 0 0 10px 0;
            color: #004a91;
        }
        .produto-info .descricao {
            font-size: 0.9em;
            color: #666;
            flex-grow: 1; /* Empurra o preço para baixo */
            margin-bottom: 15px;
        }
        .produto-info .preco {
            font-size: 1.6em;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }
        .botao-comprar {
            display: block;
            width: 100%;
            background-color: #D4AF37; /* Dourado */
            color: #333;
            font-weight: bold;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }
        .botao-comprar:hover {
            background-color: #004a91; /* Azul profundo */
            color: #ffffff;
        }

        /* --- Rodapé --- */
        .footer {
            background-color: #333;
            color: #f4f4f4;
            text-align: center;
            padding: 30px 20px;
            margin-top: 40px;
        }

    </style>
</head>
<body>

    <header class="header">
        <div class="container navbar">
            <div class="logo">Casa da Fé</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Banhos e Ervas</a></li>
                    <li><a href="#">Imagens</a></li>
                    <li><a href="#">Velas</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <h1>Encontre sua Fé e Proteção</h1>
            <p>Artigos religiosos de todas as crenças com a melhor qualidade.</p>
        </section>

        <section class="produtos-secao container">
            <h2>Nossos Destaques</h2>

            <div class="produtos-grid">

                <?php
                // Loop PHP para renderizar cada card de produto
                foreach ($produtos as $produto):
                ?>
                
                <article class="produto-card">
                    <img class="produto-imagem" src="<?php echo $produto['imagem_url']; ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>">
                    
                    <div class="produto-info">
                        <h3><?php echo htmlspecialchars($produto['nome']); ?></h3>
                        <p class="descricao"><?php echo htmlspecialchars($produto['descricao']); ?></p>
                        <span class="preco"><?php echo formatar_moeda($produto['preco']); ?></span>
                        
                        <a href="#" class="botao-comprar">
                            Adicionar ao Carrinho
                        </a>
                    </div>
                </article>

                <?php endforeach; ?>

                <?php
                // Mensagem caso o array de produtos esteja vazio
                if (empty($produtos)):
                ?>
                    <p style="text-align: center; grid-column: 1 / -1;">Nenhum produto encontrado no momento.</p>
                <?php endif; ?>

            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Casa da Fé - Artigos Religiosos. Todos os direitos reservados.</p>
        <p>Rua da Harmonia, 123 - Centro | (11) 99999-8888</p>
    </footer>

</body>
</html>