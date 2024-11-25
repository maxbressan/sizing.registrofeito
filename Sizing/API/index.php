<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados do Formulário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            border: 1px solid #007BFF;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dados do Formulário</h2>
        <table>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Nome</td>
                <td><?php echo htmlspecialchars($_POST['nome']); ?></td>
            </tr>
            <tr>
                <td>Sobrenome</td>
                <td><?php echo htmlspecialchars($_POST['sobrenome']); ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><?php echo htmlspecialchars($_POST['email']); ?></td>
            </tr>
            <tr>
                <td>Empresa</td>
                <td><?php echo htmlspecialchars($_POST['empresa']); ?></td>
            </tr>
            <tr>
                <td>Brand Intelligence</td>
                <td><?php echo htmlspecialchars($_POST['brand-intelligence']); ?></td>
            </tr>
            <tr>
                <td>Fraud</td>
                <td><?php echo htmlspecialchars($_POST['fraud']); ?></td>
            </tr>
            <tr>
                <td>Leak</td>
                <td><?php echo htmlspecialchars($_POST['leak']); ?></td>
            </tr>
            <tr>
                <td>Quantidade de Brands</td>
                <td><?php echo htmlspecialchars($_POST['num-brands']); ?></td>
            </tr>
            <tr>
                <td>Quantidade de Root Domains</td>
                <td><?php echo htmlspecialchars($_POST['num-domains']); ?></td>
            </tr>
            <tr>
                <td>Cloud</td>
                <td><?php echo htmlspecialchars($_POST['cloud']); ?></td>
            </tr>
            <tr>
                <td>Quantidade de Contas na Cloud</td>
                <td><?php echo htmlspecialchars($_POST['cloud-accounts']); ?></td>
            </tr>
            <tr>
                <td>Infra - Asset</td>
                <td><?php echo htmlspecialchars($_POST['infra-asset']); ?></td>
            </tr>
            <tr>
                <td>Quantidade de Ativos</td>
                <td><?php echo htmlspecialchars($_POST['num-developers']); ?></td>
            </tr>
            <tr>
                <td>Periodicidade da Análise de Vulnerabilidade</td>
                <td><?php echo htmlspecialchars($_POST['num-applications']); ?></td>
            </tr>
            <tr>
                <td>APP</td>
                <td><?php echo htmlspecialchars($_POST['app']); ?></td>
            </tr>
            <tr>
                <td>Esteira CI/CD</td>
                <td><?php echo htmlspecialchars($_POST['app-ci-cd']); ?></td>
            </tr>
            <tr>
                <td>Quantidade de Aplicações</td>
                <td><?php echo htmlspecialchars($_POST['num-assets']); ?></td>
            </tr>
            <tr>
                <td>Quantidade de Microsserviços</td>
                <td><?php echo htmlspecialchars($_POST['num-microservices']); ?></td>
            </tr>
            <tr>
                <td>Linguagens e Versões</td>
                <td><?php echo htmlspecialchars($_POST['languages']); ?></td>
            </tr>
            <tr>
                <td>Quantidade de Desenvolvedores</td>
                <td><?php echo htmlspecialchars($_POST['num-developers-app']); ?></td>
            </tr>
        </table>

    </div>
</body>
</html>
