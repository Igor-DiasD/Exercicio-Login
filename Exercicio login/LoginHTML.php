<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="LoginCSS.css">
	<title>Login</title>
</head>
<body>

    <div id="body">

        <form action="LoginPHP.php" method="GET">

            <h1>Login</h1>

            <div id="main">

                <div class="inputContainer">
                    <div class="inputItem">
                        <Label>E-mail</Label>
                    </div>
                    <div class="inputItem">
                        <input class="input" name="e-mail">
                    </div>
                </div>

                <div class="inputContainer">
                    <div class="inputItem">
                        <Label>Senha</Label>
                        </div>
                    <div class="inputItem">
                        <input class="input" name="senha">
                    </div>
                </div>

            </div>

            <button>Entrar</button>

        </form>
    </div>

</body>
</html>