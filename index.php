<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Seleção de Nicho - Agenda Digital</title>
<link rel="stylesheet" href="/ProjetoAgendamentos/static/css/index.css">




</head>
<body>

<!-- Cabeçalho da página -->
<header>
    <h1>Agenda Digital</h1>
    <form action="login.php" method="post">
            <button>Acessar a Área de Assinantes</button>
    </form>
    
</header>

<!-- Conteúdo principal -->
<main>
    <!-- Seção de Seleção de Nicho com botões -->
    <section id="selecao-nicho">
        <h2 id="Teste">Selecione o Nicho do Seu Estabelecimento</h2>
        
        <div class="nicho-buttons">
            <!-- Botões para cada nicho -->
            <form action="backend/definir_nicho.php" method="post">
                <button id="BotaoBarbearia" type="submit" name="nicho" value="barbearia">Barbearia</button>
            </form>
            
            <form action="backend/definir_nicho.php" method="post">
                <button id="BotaoSalao" type="submit" name="nicho" value="salao_beleza">Salão de Beleza</button>
            </form>
            
            
            
        </div>
    </section>
</main>

<!-- Rodapé da página -->
<footer>
    <p>&copy; 2024 Agenda Digital</p>
</footer>

</body>
</html>
