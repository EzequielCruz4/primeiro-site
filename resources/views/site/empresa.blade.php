<?php
// --- CODIGO GERADO POR IA (Simulação de dados) ---

// Simula um usuário logado
$usuario_logado = [
    "nome" => "Gestor Admin",
    "email" => "admin@suaempresa.com"
];

// Simula métricas do dashboard (normalmente viriam do banco de dados)
$metricas = [
    "total_vendas_mes" => 150320.50,
    "novos_clientes" => 82,
    "tickets_suporte_abertos" => 14
];

// Simula uma lista de funcionários (normalmente viria do banco de dados)
$funcionarios = [
    [
        "id" => 101,
        "nome" => "Ana Clara",
        "cargo" => "Gerente de Vendas",
        "departamento" => "Vendas",
        "status" => "Ativo"
    ],
    [
        "id" => 102,
        "nome" => "Bruno Mendes",
        "cargo" => "Desenvolvedor Pleno",
        "departamento" => "Tecnologia",
        "status" => "Ativo"
    ],
    [
        "id" => 103,
        "nome" => "Carla Dias",
        "cargo" => "Analista de Marketing",
        "departamento" => "Marketing",
        "status" => "Férias"
    ],
    [
        "id" => 104,
        "nome" => "Diego Faria",
        "cargo" => "Suporte Técnico N2",
        "departamento" => "Suporte",
        "status" => "Inativo"
    ]
];

// Função auxiliar para formatar moeda
function formatar_moeda($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}

// --- FIM DA LÓGICA PHP ---
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Minha Empresa</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* --- Header --- */
        .header {
            background-color: #ffffff;
            border-bottom: 1px solid #ddd;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            margin: 0;
            color: #0056b3; /* Cor corporativa */
        }
        .user-info {
            font-size: 0.9em;
            text-align: right;
        }

        /* --- Widgets de Métricas --- */
        .widgets-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .widget {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            padding: 25px;
            border: 1px solid #e0e0e0;
        }
        .widget h3 {
            margin-top: 0;
            color: #555;
            font-size: 1.1em;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .widget .valor {
            font-size: 2.2em;
            font-weight: 600;
            color: #0056b3;
        }

        /* --- Tabela de Funcionários --- */
        .tabela-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            padding: 25px;
            margin-top: 30px;
            overflow-x: auto; /* Para responsividade em tabelas */
        }
        .tabela-container h2 {
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f9f9f9;
            font-weight: 600;
        }
        
        /* --- Lógica de Status (PHP + CSS) --- */
        .status {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.85em;
            font-weight: bold;
            display: inline-block;
        }
        .status-ativo { background-color: #d4edda; color: #155724; }
        .status-ferias { background-color: #fff3cd; color: #856404; }
        .status-inativo { background-color: #f8d7da; color: #721c24; }

    </style>
</head>
<body>

    <header class="header">
        <h1>Minha Empresa S.A.</h1>
        <div class="user-info">
            <strong><?php echo htmlspecialchars($usuario_logado['nome']); ?></strong><br>
            <span><?php echo htmlspecialchars($usuario_logado['email']); ?></span>
        </div>
    </header>

    <main class="container">
        
        <h2>Dashboard Principal</h2>

        <div class="widgets-grid">
            <div class="widget">
                <h3>Vendas (Mês)</h3>
                <span class="valor"><?php echo formatar_moeda($metricas['total_vendas_mes']); ?></span>
            </div>
            
            <div class="widget">
                <h3>Novos Clientes</h3>
                <span class="valor"><?php echo $metricas['novos_clientes']; ?></span>
            </div>

            <div class="widget">
                <h3>Tickets de Suporte</h3>
                <span class="valor"><?php echo $metricas['tickets_suporte_abertos']; ?></span>
            </div>
        </div>

        <div class="tabela-container">
            <h2>Quadro de Colaboradores</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Departamento</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop PHP para renderizar a tabela
                    foreach ($funcionarios as $func):
                    
                        // Lógica condicional para definir a classe CSS do status
                        $status_class = '';
                        switch ($func['status']) {
                            case 'Ativo':
                                $status_class = 'status-ativo';
                                break;
                            case 'Férias':
                                $status_class = 'status-ferias';
                                break;
                            case 'Inativo':
                                $status_class = 'status-inativo';
                                break;
                        }
                    ?>
                        <tr>
                            <td><?php echo $func['id']; ?></td>
                            <td><?php echo htmlspecialchars($func['nome']); ?></td>
                            <td><?php echo htmlspecialchars($func['cargo']); ?></td>
                            <td><?php echo htmlspecialchars($func['departamento']); ?></td>
                            <td>
                                <span class="status <?php echo $status_class; ?>">
                                    <?php echo htmlspecialchars($func['status']); ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <?php
                    // Mensagem caso o array esteja vazio
                    if (empty($funcionarios)):
                    ?>
                        <tr>
                            <td colspan="5" style="text-align: center;">Nenhum funcionário encontrado.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </main>

</body>
</html>