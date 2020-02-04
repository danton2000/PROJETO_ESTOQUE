<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lib/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container" id="tamanho_container">
        <div id="botao_direita">
            <a href="listar_usuario.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
        </div>
        <h4>Cadastro de Usuario</h4>
        <form action="inserir_usuario.php" method="post">
            <!--POST = inserir dados -->
            <div class="form-group">
                <label>Nome do Usuário</label>
                <input type="text" name="nome_usuario" placeholder="Digite o seu nome completo" class="form-control"
                    required autocomplete="off">
            </div>
            <div class="form-group">
                <label>E-mail do Usuário</label>
                <input type="email" name="email_usuario" placeholder="Digite o seu E-mail" class="form-control" required
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label>Senha do Usuário</label>
                <input id="txtSenha" type="password" name="senha_usuario" placeholder="Digite a sua senha"
                    class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Repetir a sua Senha</label>
                <input type="password" name="senha_usuario2" placeholder="Repita a sua senha" class="form-control"
                    required autocomplete="off" oninput="validaSenha(this)">
                <small>Precisa ser igual a senha digitada acima</small>
            </div>

            <div class="form-group">
                <label>Nível de Acesso</label>
                <select name="nivel_usuario" class="form-control">

                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>


                </select>
            </div>

            <div id="botao_direita">
                <button type="submit" id="botao_cadastrar" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
    function validaSenha(input) {
        if (input.value != document.getElementById('txtSenha').value) {
            input.setCustomValidity('Repita a senha corretamente');
        } else {
            input.setCustomValidity('');
        }
    }
    </script>

</body>

</html>