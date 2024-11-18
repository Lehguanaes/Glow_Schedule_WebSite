<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Procedimento</title>
    <!-- Links externos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <!-- Estilização padrão do web site -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Estilização formulários de Perfis -->
    <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
    <!-- Início da Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand"> <img class="rounded-circle ms-4" src="../logo/Logo.png" alt="Logo care tones" width="69px"> </a>
            <div class="logo">
                <a class="nav-link active" aria-current="page" href="home.php">Care Tones</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-auto">
                    <li class="nav-item pe-4 ps-4">
                        <a class="nav-link active" aria-current="page" href="agenda.php">Agenda</a>
                    </li>
                    <li class="nav-item pe-4 ps-4">
                        <a class="nav-link active" aria-current="page" href="cadastroEsteticista.php">Cadastro Esteticista</a>
                    </li>
                    <li class="nav-item pe-4 ps-4">
                        <a class="nav-link active" aria-current="page" href="FormularioDuvidas.php">Formulário de dúvidas</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-sm btn-link me-4 ms-4" id="link_agendamentos_ativado"><a href="cadastrarConsulta.php" id="link_agendamentos_ativado">Agendamentos</a></button>
            </div>
        </div>
    </nav>
    <!-- Fim da Navbar -->

    <h2>Cadastro de Procedimento</h2>

    <!-- Cadastro de Procedimento -->
    <section class="container">
        <form method="POST" action="/glow_schedule/controller/esteticista/esteticistaController.php" enctype="multipart/form-data" class="form" id="form_perfil">
            <input type="hidden" name="acao" value="inserir">
            <!-- Linha com a Foto e CPF -->
            <div class="column">
                <div class="input-box">
                    <!-- Campo de Foto de Perfil -->
                    <div class="profile-pic-container">
                    <img src="../iconesProcedimento/procedimentoPadrao.png" alt="Foto de procedimento padrão" class="profile-pic" id="procedimento-pic-preview">
                        <label class="upload-button" for="foto_procedimento">
                            <i class="fa fa-plus"></i>
                        </label>
                        <input type="file" name="foto_procedimento" id="foto_procedimento" accept="image/*" onchange="previewProcedimentoPic()" required>
                        <label id="label_foto_perfil" for="foto_procedimento">*Adicione a foto aqui:</label>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label for="nome_procedimento">*Nome do Procedimento:</label>
                    <input type="text" class="form-control" id="nome_procedimento" name="nome_procedimento" placeholder="Digite o Nome do Procedimento:" required>
                </div>
                <!-- Campo de Preço do Procedimento -->
                <div class="input-box">
                    <label for="preco_procedimento">*Preço:</label>
                    <input type="text" class="form-control" id="preco_procedimento" name="preco_procedimento" placeholder="Digite o preço do procedimento" required>
                </div>
            </div>

            <!-- Duração do Procedimento -->
            <div class="column">
                <div class="input-box">
                    <label for="duracao_procedimento">*Duração:</label>
                    <input type="text" class="form-control" id="duracao_procedimento" name="duracao_procedimento" placeholder="Digite a duração do procedimento" required>
                </div>
                <!-- Manutenção do Procedimento -->
                <div class="input-box">
                    <label for="manutencao_procedimento">*Manutenção:</label>
                    <input type="text" class="form-control" id="manutencao_procedimento" name="manutencao_procedimento" placeholder="Digite a manutenção do procedimento" required>
                </div>
            </div>
            <!-- Descrição Curta do Procedimento -->
            <div class="column">
                <div class="input-box">
                    <label for="descricao_p_procedimento">*Descrição Curta:</label>
                    <textarea class="form-control" id="descricao_p_procedimento" name="descricao_p_procedimento" placeholder="Digite uma breve descrição do procedimento:" required></textarea>
                </div>
            </div>
            <!-- Descrição Detalhada do Procedimento -->
            <div class="column">
                <div class="input-box">
                    <label for="descricao_g_procedimento">*Descrição Detalhada:</label>
                    <textarea class="form-control" id="descricao_g_procedimento" name="descricao_g_procedimento" placeholder="Digite uma descrição detalhada do procedimento:" required></textarea>
                </div>
            </div>
            <!-- Botão de Submissão -->
            <button id="botao_cadastrar" type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </section>

    <!-- Script de Pré-visualização da Imagem -->
    <script>
        function previewProcedimentoPic() {
            const file = document.getElementById("foto_procedimento").files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("procedimento-pic-preview").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>