<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />

    <meta http-equiv="Content-Security-Policy"
        content="default-src * 'unsafe-inline' gap:; style-src 'self' 'unsafe-inline'; media-src *" />
    
    <link rel="stylesheet" type="text/css" href="css/ionic.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hippotec</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#insert").click(function() {
            var nome = $("#nome").val();
            var email = $("#email").val();
            var pass = $("#senha").val();
            var cpf = $("#tcpf").val();
            var dtnasc = $("#dtnasc").val();
            var dtmake = $("#dtcriado_usr").val();
            var dtmod = $("#dtmodificado_usr").val();
            var dataString = "nome=" + nome + "&email=" + email + "&pass=" + pass + "&cpf=" + cpf +
                "&dtnasc=" + dtnasc + "&dtmake=" + dtmake + "&dtmod=" + dtmod + "&insert=";
            if ($.trim(nome).length > 0 & $.trim(email).length > 0 & $.trim(pass).length > 0 & $.trim(
                    cpf).length > 0 & $.trim(dtnasc).length > 0) {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/2021/hpt/cadastrar_usr.php",
                    data: dataString,
                    crossDomain: true,
                    cache: false,
                    beforeSend: function() {
                        $("#insert").val('Connectando ao banco...');
                    },
                    success: function(data) {
                        if (data = "success") {
                            alert("Dados Inseridos com sucesso");
                            $("#insert").val('Cadastrar');
                        } else if (data == "error") {
                            alert("error");
                        }
                    }
                });
            }
            return false;
        });
    });
    </script>
</head>

<body>
    <div class="bar bar-hearder bar-calm" style="margin-bottom: 80px;">
        <a href="../../View/index.php" class="button button-clear">Home</a>
        <h1 class="title">Cadastro De Usuario</h1>
        <?php
        date_default_timezone_set('America/Sao_Paulo');
    //armazena o horario em uma variavel
    $dtcriado_usr = new DateTime();
    $dtmodificado_usr = new DateTime('0000-00-00 00:00:00');
    // adiciona no post criado em e id_tema
    /*$_POST +=
    [
        "dtcriado_usr"=>$dtcriado_usr->format('Y-m-d H:i:s'),
        "dtmodificado_usr"=>$dtmodificado_usr->format('Y-m-d H:i:s')
    ];*/
?>
    </div>
    <br>
    <br>
    <div class="list">
        <form class="w3-container" action="" method="POST">
            <input type="hidden" id="id" class="w3-input" name="txtId">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" class="w3-input w3-animate-input" style="width:30%" name="txtNome">
            
            <label for="senha">Senha:</label>
            <input type="text" id="senha" class="w3-input w3-animate-input" style="width:30%" name="txtSenha">
            
            <label for="tcpf">CPF:</label>
            <input type="text" id="tcpf" class="w3-input w3-animate-input" style="width:30%" name="txtCpf">
            
            <label for="dtnasc">DT.NASC.:</label>
            <input type="text" id="dtnasc" class="w3-input w3-animate-input" style="width:30%" name="txtDtnasc">
            
            <label for="email">Email:</label>
            <input type="email" id="email" class="w3-input w3-animate-input" style="width:30%" name="txtEmail">
            <input type="hidden" id="dtcriado_usr" style="width:30%" name="dtcriado_usr"
                value="<?= $dtcriado_usr->format('Y-m-d H:i:s')?>">
            <input type="hidden" id="dtmodificado_usr" style="width:30%" name="dtmodificado_usr"
                value="<?= $dtmodificado_usr->format('Y-m-d H:i:s')?>">
            
            <hr>
            <input type="submit" id="insert" class="button button-positive" value="Cadastar Usuario">
            <a class="button button-positive " href="../../index.php"> Voltar para a inicio</a>

        </form>
    </div>
    <div class="bar bar-footer">
        <button class="button button-clear pull-right">@dieguesmosken - Hippotec 2020 &COPY;</button>
    </div>
</body>

</html>