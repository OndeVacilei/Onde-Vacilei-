<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="shortcut icon" href="/assets/img/icon_head.png">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <title>LOGIN</title>
    </head>
    <body class="body-login">
        <div class="container-fluid">
            <div class="row box">
                <div class="login-box">
                    <form class="col-md-12 form-login" action="principal.php" method="POST">
                        <div class="col-md-7">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Usuário ou Email" name="username">
                            </div>

                            <label class="sr-only" for="inlineFormInputGroup">Senha</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
                                <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Senha" name="senha">
                            </div>

                            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Matenha me conectado
                                </label>
                            </div>

                            <button type="submit" class="btn btn-block" id="button-style1">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
