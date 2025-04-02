<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Document</title>
</head>

<body>
    <main>
        <section class="container01">
            <div class="containerCadratro">
                <h2>Conecte-se</h2>
                <form action="validarLogin.php" method="post">
                    <div class="user-box">
                        <input type="text" name="email" required="">
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="senha" required="">
                        <label>Senha</label>
                    </div>
                    <div class="user-box">
                        <input type="submit" name="submit" id="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </section>
        <section class="container02"></section>
    </main>
</body>
</html>