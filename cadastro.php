<?php
    if(isset($_POST['submit'])){
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['telefone']);
        //print_r($_POST['data_nascimento']);
        //print_r($_POST['cpf']);
        //print_r($_POST['senha']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        $return = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,data_nasc,cpf,senha) VALUES ('$nome','$email','$telefone','$data_nascimento','$cpf','$senha')");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <section class="container01">
            <div class="containerCadratro">
                <h2>Cadastre-se</h2>
                <form action="cadastro.php" method="POST">
                    <div class="user-box">
                        <input type="text" name="nome" id="nome" required="">
                        <label>Nome</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="email" id="email" required="">
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="telefone" id="telefone" required="">
                        <label>Telefone</label>
                    </div>
                    <div class="user-box">
                        <p class="data">Data de nascimento</p>
                        <input type="date" name="data_nascimento" id="data_nascimento" required="">
                    </div>
                    <div class="user-box">
                        <input type="text" name="cpf" id="cpf" required="">
                        <label>CPF</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="senha" id="senha" required="">
                        <label>Senha</label>
                    </div>
                    <div class="user-box">
                        <input type="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </section>
        <section class="container02"></section>
    </main>
</body>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        height: 100vh;
        width: 100vw;
        background-color: rgba(85, 6, 6, 0.9);
    }

    main {
        height: 100vh;
        width: 100vw;
        display: flex;
    }

    .container01 {
        height: 100vh;
        width: 40vw;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container02 {
        height: 100vh;
        width: 60vw;
        background-image: url('Imgs/img04.png');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .containerCadratro {
        width: 20vw;
        padding: 40px;
        background: rgba(0, 0, 0, .3);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .containerCadratro h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }


    .containerCadratro .user-box {
        position: relative;
    }

    .containerCadratro .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .containerCadratro .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .data{
        color: white;
    }

    .containerCadratro .user-box #submit{
        padding: 10px 10px 10px 10px;
        width: 8vw;
        border-radius: 10px;
        border: none;
        font-size: 15px;
        cursor: pointer;
        display: flex;
        justify-content: space-around;
        transition: 0.8s;
        background-color: white;
        color: black;
    }

    .containerCadratro .user-box input:focus~label,
    .containerCadratro .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #ff2c2c;
        font-size: 12px;
    }

    .containerCadratro form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }
</style>

</html>