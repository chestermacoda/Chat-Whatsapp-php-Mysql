<?php
session_start();
if(isset($_SESSION['admin'])){
    header('location: Admin/index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Chats</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/all.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>
<body>
    <div class="container-fluid">
        <form action="php/data/login.php" class="form-group">
            <div class="row text-center my-3 mb-4">
                <h2 class="fs-4">Login Chat</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="response text-center"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" name="email" id="" class="form-control form-control-sm rounded-0" placeholder="Digite o seu email...">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="password" name="senha" id="" class="form-control form-control-sm rounded-0" placeholder="Digite a sua senha...">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Enviar" class="btn btn-sm btn-primary rounded-0 enviar">
                </div>
            </div>
            <div class="row registar">
                <p>Ja tens uma conta ? <a href="register.html">Regista-se</a></p>
            </div>
        </form>
    </div>
    <script src="public/js/jquery.js"></script>    
    <script src="public/js/form_login.js"></script>   
</body>
</html>