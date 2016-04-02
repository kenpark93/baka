<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="/images/favicon.ico">

    <title>Just CHAT</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Войдите пожалуйста!</h2>
        <input type="login" class="form-control" placeholder="Логин" required autofocus>
        <input type="password" class="form-control" placeholder="Пароль" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти!</button>
        <a href="#regModal" role="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#regModal">Зарегистрироваться!</a>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regModalLabel" aria-hidden="true" style="z-index:2001;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="form-signin-heading" id="myModalLabel">Регистрация нового пользователя</h4>
                </div>
                <div class="modal-body">
                    <div class="centered">
                        <div id="cont"></div>
                        <div class="input-field col-lg-12">
                            <i class="fa fa-user prefix"></i>
                            <input name="login" id="login" type="login" placeholder="Логин" class="form-control" autofocus required>
                        </div>
                        <div class="input-field col-lg-12">
                            <i class="fa fa-key prefix"></i>
                            <input name="pass" id="pass" type="password" placeholder="Пароль" class="form-control" required>
                        </div>  
                        <div class="input-field col-lg-12">
                            <i class="fa fa-key prefix"></i>
                            <input name="pass_confirm" id="pass_confirm" type="password" placeholder="Подтверждение пароля" class="form-control" required>
                        </div> 
                        <div class="input-field col-lg-12">
                            <i class="fa fa-text-width prefix"></i>
                            <input name="fio" id="fio" type="text" placeholder="ФИО" class="form-control" required>
                        </div>  
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="centered">
                        <button id="done_reg" type="submit" class="btn btn-lg btn-primary btn-block">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                    </div>
                </div>
            </div>  
        </div>
    </div>
  </body>
</html>
<script type="text/javascript">
        $("document").ready(function(){
            $('#modal').modal();
        });
    </script>