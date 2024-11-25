<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questionário para Apoio no Dimensionamento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilo.css">

    <style>




     /* Header */
     .header {

            color: #0d0d0d;
            text-align: center;
            padding: 70px 20px;
            font-size: 2rem;
        }

        .header img {
            width: 280px;
            height: auto;
            position: absolute;
            top: 0px;
            left: 0px;
        }
  
        /* Rodapé do página */
        footer {
            background-color: #0d0dfb; /* Cor do rodapé */
            color: rgb(236, 226, 226);
            padding: 0px;
            width: 100%; /* Largura */
            position: absolute; /* Positions  */
            bottom: 10; /* Anchors footer to bottom of viewport */
            text-align: center; /* Localização do texto */
        }

        ul {
            list-style: none;
            padding: 100px;
            margin: 0;
            color: #0000;
        }

        li {
            display: inline-block;
            margin-right: 100px;
            color: #0d0dfb;
        }

        .form-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        button[type="submit"] {
      
            border-radius: 10px; /* Bordas arredondadas */
            transition: background-color 0.3s, transform 0.3s;
        }


        

        /* Cor da parte superior */
        .header {
            background-color: #0d0dfb;
            color: white;
            text-align: center;
            padding: 100px;
            font-family: Arial, sans-serif;
        }

        /* Cor do rodapé */
        .footer {
            background-color: #0d0dfb; /* Cor de fundo */
            color: #ffffff; /* Cor do texto */
            text-align: center;
            padding: 100px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        .footer .social-icons {
            margin-bottom: 15px;
        }

        .footer .icon {
            display: inline-block;
            margin: 0 10px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #3c42ff; /* Cor de fundo dos ícones */
            color: #ffffff; /* Cor dos ícones */
            border-radius: 50%;
            font-size: 18px;
            text-align: center;
            transition: background-color 0.3s, transform 0.3s;
            text-decoration: none;
        }

        .footer .icon:hover {
            background-color: #555;
            transform: scale(1.1);
        }

  

            .form-group {
                margin-bottom: 10px;
            }




        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {

            outline: none;
        }

        h3 {
            color: #000000; /* Cor preta para os subtítulos */
        }
        h2 {
            color: #000000; /* Cor preta para os subtítulos */
        }

        h4 {
            color: #000000; /* Cor preta para os subtítulos */
        }

        h5 {
            color: #000000; /* Cor preta para os subtítulos */
        }








        footer {
            background-color: #0d0dfb;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .form-container {
            margin: 20px auto;
            max-width: 800px;
        }


    
        .form-group select,
        .form-group textarea,
        .form-group input {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            width: 100%;
        }

        .hidden {
            display: none;
        }
            







    </style>
</head>
<body>
<header class="header">
        <img src="images.png" alt="Logo da empresa" style="position: absolute; top: 50; left: 70;">
        <h1>Questionário para Apoio no Dimensionamento</h1>

    </header>

    <main>
        <div class="container">

            <form method="POST" action="index.php">
               <p></p> <h3>Informações de Contato</h3>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required maxlength="60">
                </div>

                <div class="form-group">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" id="sobrenome" name="sobrenome" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="empresa">Empresa:</label>
                    <input type="text" id="empresa" name="empresa" required>
                </div>

                <h3>Brand Intelligence:</h3>
                <h5>Você espera utilizar algum módulo de Brand Intelligence?</h5>
                <select class="form-control" id="brand-intelligence" name="brand-intelligence" required onchange="toggleFields('brand-intelligence', 'brand-intelligence-details')">
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>

                <div id="brand-intelligence-details" class="hidden">
                    <div class="form-group">
                        <label for="fraud">Fraud:</label>
                        <select class="form-control" id="fraud" name="fraud">
                            <option value="">Selecione</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="leak">Leak:</label>
                        <select class="form-control" id="leak" name="leak">
                            <option value="">Selecione</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="num-brands">Informar quantidade de brands (marcas):</label>
                        <textarea class="form-control" id="num-brands" name="num-brands" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="num-domains">Informar quantidade de root domains (domínios base):</label>
                        <textarea class="form-control" id="num-domains" name="num-domains" rows="3"></textarea>
                    </div>
                </div>

                <h3>Vulnerability Intelligence:</h3>
                <div class="form-group">
                    <label for="cloud">CLOUD:</label>
                    <select class="form-control" id="cloud" name="cloud" required onchange="toggleFields('cloud', 'cloud-details')">
                        <option value="">Selecione</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>

                <div id="cloud-details" class="hidden">
                    <div class="form-group">
                        <label for="cloud-accounts">Informar quantidade de contas (organizações) por cloud pública:</label>
                        <textarea class="form-control" id="cloud-accounts" name="cloud-accounts" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="infra-asset">INFRA - ASSET:</label>
                    <select class="form-control" id="infra-asset" name="infra-asset" required onchange="toggleFields('infra-asset', 'infra-asset-details')">
                        <option value="">Selecione</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>

                <div id="infra-asset-details" class="hidden">
                    <div class="form-group">
                        <label for="num-developers">Quantidade de ativos:</label>
                        <textarea class="form-control" id="num-developers" name="num-developers" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="num-applications">Qual a periodicidade da análise de vulnerabilidade:</label>
                        <textarea class="form-control" id="num-applications" name="num-applications" rows="4"></textarea>
                    </div>
                </div>

                <h3>APP:</h3>
                <div class="form-group">
                    <label for="app">Verificação de vulnerabilidades em aplicações através de análises como qualidade, SAST, SCA, DAST, Container (Docker) Etc:</label>
                    <select class="form-control" id="app" name="app" required onchange="toggleFields('app', 'app-details')">
                        <option value="">Selecione</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>

                <div id="app-details" class="hidden">
                    <div class="form-group">
                        <label for="app-ci-cd">A empresa possui esteira CI/CD construída e utiliza repositório git?</label>
                        <select class="form-control" id="app-ci-cd" name="app-ci-cd">
                            <option value="">Selecione</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="num-assets">Quantas aplicações serão analisadas pela plataforma e quantos módulos (repositórios) por aplicação?</label>
                        <textarea class="form-control" id="num-assets" name="num-assets" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="num-microservices">Dessas aplicações, quantas são microsserviços?</label>
                        <textarea class="form-control" id="num-microservices" name="num-microservices" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="languages">Quais são as linguagens e versões utilizadas nestas aplicações?</label>
                        <textarea class="form-control" id="languages" name="languages" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="num-developers-app">Quantos desenvolvedores tem relacionados com as aplicações listadas?</label>
                        <textarea class="form-control" id="num-developers-app" name="num-developers-app" rows="3"></textarea>
                    </div>
                </div>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>

    <footer class="footer">
        <div class="social-icons">
            <a href="https://facebook.com/registro-feito" target="_blank" class="icon">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com/registro.feito" target="_blank" class="icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://linkedin.com/company/registro-feito" target="_blank" class="icon">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <p>© 2024 Registro Feito Technologies - Todos os direitos reservados.</p>
    </footer>

    <script>
        function toggleFields(selectId, detailsId) {
            const selectElement = document.getElementById(selectId);
            const detailsElement = document.getElementById(detailsId);
            if (selectElement.value === 'Sim') {
                detailsElement.classList.remove('hidden');
                const inputs = detailsElement.querySelectorAll('input, select, textarea');
                inputs.forEach(input => input.required = true);
            } else {
                detailsElement.classList.add('hidden');
                const inputs = detailsElement.querySelectorAll('input, select, textarea');
                inputs.forEach(input => input.required = false);
            }
        }

        document.getElementById('brand-intelligence').addEventListener('change', function() {
            toggleFields('brand-intelligence', 'brand-intelligence-details');
        });

        document.getElementById('cloud').addEventListener('change', function() {
            toggleFields('cloud', 'cloud-details');
        });

        document.getElementById('infra-asset').addEventListener('change', function() {
            toggleFields('infra-asset', 'infra-asset-details');
        });

        document.getElementById('app').addEventListener('change', function() {
            toggleFields('app', 'app-details');
        });
    </script>
</body>
</html>
