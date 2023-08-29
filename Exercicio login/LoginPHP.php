<?php

    $cadastro = [
        [
            "email" => "joao.silva@gmail.com",
            "senha" => "asdf1234",
            "nome" => "João Silva",
            "foto" => "https://foo.bar/foto/joao",
            "cidade" => "Charqueadas",
            "fone" => "51987653465",
            "sexo" => "Masculino",
            "idade" => "19"
        ],
        [
            "email" => "maria.rodrigues@gmail.com",
            "senha" => "qwerty5678",
            "nome" => "Maria Rodrigues",
            "foto" => "https://foo.bar/foto/maria",
            "cidade" => "Porto Alegre",
            "fone" => "51976543210",
            "sexo" => "Feminino",
            "idade" => "28"
        ]
    ];


    $email = $_GET["e-mail"];
    $senha = $_GET["senha"];
    $nome = "";
    $sexo = "";
    $cidade = "";
    $telefone = "";
    $idade = "";
    $mensagem = "";
    $cont = 0;

    foreach ($cadastro as $usuario) {
        $emailTeste = $usuario["email"];
        $senhaTeste = $usuario["senha"];

        if($emailTeste == $email && $senhaTeste == $senha){
            $nome = $usuario["nome"];
            $sexo = $usuario["sexo"];
            $email = $usuario["email"];
            $cidade = $usuario["cidade"];
            $telefone = $usuario["fone"];
            $idade = $usuario["idade"];
            $cont++;
        }
    }

    if($cont == 0){
        header("Location: LoginHTML.php");
    }


    if($sexo == "Masculino"){
        $mensagem = "Bem vindo $nome, segue suas informações de perfil:";

    }else if($sexo == "Feminino"){
        $mensagem = "Bem vinda $nome, segue suas informações de perfil:";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="LoginCSS.css">
	<title>Conta</title>
</head>
<body>

    <div id="divBodyPHP">

        <h1 id="h1PHP">
            <?php echo $mensagem; ?>
        </h1>

        <div id="mainPHP">
            <div class="divPHP">
                <p>
                    <?php 
                        echo "Nome: $nome"; 
                    ?>
                </p>
            </div>

            <div class="divPHP">
                <p>
                    <?php 
                        echo "Idade: $idade"; 
                    ?>
                </p>
            </div>

            <div class="divPHP">
                <p>
                    <?php 
                        echo "Cidade: $cidade"; 
                    ?>
                </p>
            </div>

            <div class="divPHP">
                <p>
                    <?php 
                        echo "Número: $telefone"; 
                    ?>
                </p>
            </div>
        </div>

    </div>

</body>
</html>