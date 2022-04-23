<?php

function print_login_dialog($enable_registration) {
  echo '
    <!-- Диалог авторизации : начало -->
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Авторизация</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <form id="loginForm" method="POST" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="username" class="control-label">Адрес e-mail</label>
                                    <input type="text" class="form-control" id="login" name="login" value="" required="" title="Please enter you username" placeholder="example@gmail.com" autofocus>
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Пароль</label>
                                    <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                    <span class="help-block"></span>
                                </div>
                                <hr/>
                                <a href="forgot_password.php" class="btn btn-default">Восстановить пароль</a>
                                <a href="#" id="btn-login-user" class="btn btn-success float-right">Войти</a>
                            </form>
                        </div>
                        <div class="col-md-7" id="message">
                            <p class="lead">Что даёт регистрация?</p>
                            <ul class="a">
                                <li><span class="fa fa-check text-success"></span> Можно подать свои проекты</li>
                                <li><span class="fa fa-check text-success"></span> Можно получить оценку эксперта</li>
                                <li><span class="fa fa-check text-success"></span> <b>Можно получить баллы к ЕГЭ</b></li>
                            </ul>
    ';
    if($enable_registration == true)
        echo'
                            <p><a href="register.php" class="btn btn-info btn-block">Пройти регистрацию</a></p>
            ';
    else
        echo'
                            <p class="bg-primary text-white text-center"><b>Регистрация на конференцию окончена</b></p>
            ';
    echo '
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Диалог авторизации : конец -->
  ';
}

function print_login_js_code() {

}

?>
