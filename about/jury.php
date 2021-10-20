
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="512x512" href="http://ritm-miet.ru/icon_512x512.png" type="image/png">
    <link rel="icon" sizes="32x32" href="http://ritm-miet.ru/static/img/icon_32x32.png" type="image/png">
    <link rel="icon" sizes="512x512" href="http://ritm-miet.ru/static/img/icon_512x512.png" type="image/png">
    <link rel="icon" sizes="192x192" href="http://ritm-miet.ru/static/img/icon_192x192.png" type="image/png">

    <link href="../libs/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../libs/fontawesome-5.0.9/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="jurycards.css">

    <style>
        main {
            padding-top: 20px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding-top: 30px;
            background-color: #292c2f;
            color: #bbb;
        }
        .footer a {
          color: #999;
          text-decoration:none;
        }
        .footer a:hover, footer a:focus {
          color: #aaa;
          text-decoration:none;
          border-bottom:1px dotted #999;
        }
        .footer .form-control {
            background-color: #1f2022;
            box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
            border: none;
            resize: none;
            color: #d1d2d2;
            padding: 0.7em 1em;
        }
        .navbar {
            background-color: #0F45C7;
        }
        /* change the link color */
        .navbar .navbar-nav .nav-link {
            color: rgba(255,255,255,.8);
        }
        /* change the color of active or hovered links */
        .navbar .nav-item.active .nav-link,
        .navbar .nav-item:hover .nav-link {
            color: #ffffff;
        }
        /* change the brand and text color */
        .navbar .navbar-brand,
        .navbar .navbar-text {
            color: rgba(255,255,255,.9);
        }
        .navbar .btn-outline-success {
            background: rgba(255,0,255,.9);
        }
        .navbar-toggler-icon {
            color:white !important; /*Whatever colour you want for icon lines*/
        }
        .navbar-toggler {
            background:#0F45C7 !important; /*Whatever colour you want for background */
        }
    </style>

    <title>Творчество юных-2022 : Наше жюри</title>
</head>
<body>

<?php
    define('__SITE_BASE__', '../');
    require_once(__SITE_BASE__ . 'php/ui.php');
?>

<?php ui_print_menubar(); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo __SITE_BASE__; ?>index.php">Главная</a></li>
            <li class="breadcrumb-item active">О конкурсе</li>
            <li class="breadcrumb-item active" aria-current="page">Наше жюри</li>
        </ol>
    </nav>

    <main role="main" class="container-fluid">
        <div class="row">

            <!-- Левая колонка с описанием того, как всё происходит -->
            <div class="col-lg-3">
                <h1 class="my-4">Наше жюри</h1>
                Все присланные работы проверяются членами жюри и проходят две стадии проверки:
                <ul>
                    <li>заочная проверка</li>
                    <li>защита проекта</li>
                </ul>
                <p>Цель заочной проверки - определить, имеет ли представленная работа научный или практический интерес для других участников и членов жюри и может ли она быть допущена ко второму этапу.</p>
                <p>При проведении второго этапа у участников конференции есть возможность представить свой проект и защитить его, отвечая на вопросы жюри.</p>
            </div>

            <!-- Правая колонка с членами жюри -->
            <div class="col-lg-9">
                <div class="row">

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/39450" target="_blank"> <img class="img" src="./images/jury_Bardushkin.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Бардушкин<br/>Владимир<br/>Валентинович</h5>
                            <h6 class="category text-gray">д.ф.-м.н., <a href="https://miet.ru/structure/s/240" target="_blank">кафедра ВМ-2</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Математика и экономика"</h6>
                            <h6><b>Подсекция</b><br/>"Математика"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/41744" target="_blank"> <img class="img" src="./images/jury_Lupin.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Лупин<br/>Сергей<br/>Сергеевич</h5>
                            <h6 class="category text-gray">ст. преподаватель, <a href="https://miet.ru/structure/s/3194" target="_blank">кафедра "ЭМФ"</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Математика и экономика"</h6>
                            <h6><b>Подсекция</b><br/>"Экономика"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/59121" target="_blank"> <img class="img" src="./images/jury_Manilova.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Манилова<br/>Галина<br/>Васильевна</h5>
                            <h6 class="category text-gray">к.ф.-м.н., <a href="https://miet.ru/structure/s/239" target="_blank">кафедра ОФ</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Физика"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/10338" target="_blank"> <img class="img" src="./images/jury_Gagarina.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Гагарина<br/>Лариса<br/>Геннадьевна</h5>
                            <h6 class="category text-gray">д.т.н., <a href="https://miet.ru/structure/s/3215" target="_blank">институт СПИНТЕХ</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Информационные технологии и программирование"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/40725" target="_blank"> <img class="img" src="./images/jury_Bulakh.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Булах<br/>Дмитрий<br/>Александрович</h5>
                            <h6 class="category">к.т.н., <a href="https://miet.ru/structure/s/233" target="_blank">кафедра ПКИМС</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Электроника и микроэлектроника"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/44974" target="_blank"> <img class="img" src="./images/jury_Bakhtin.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Бахтин<br/>Александр<br/>Александрович</h5>
                            <h6 class="category text-gray">к.т.н., <a href="https://miet.ru/structure/s/247" target="_blank">кафедра ТКС</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Цифровые технологии будущего"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/50320" target="_blank"> <img class="img" src="./images/jury_Kaleev.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Калеев<br/>Дмитрий<br/>Вячеславович</h5>
                            <h6 class="category text-gray">к.т.н., <a href="https://miet.ru/structure/s/2774" target="_blank">институт МПСУ</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Умный город"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/48590" target="_blank"> <img class="img" src="./images/jury_Pyanov.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Пьянов<br/>Иван<br/>Владимирович</h5>
                            <h6 class="category text-gray">к.ф.-м.н., <a href="https://miet.ru/structure/s/242" target="_blank">институт БМС</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Медицина и здоровьесберегающие технологии"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/46373" target="_blank"> <img class="img" src="./images/jury_Sevrukova.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Севрюкова<br/>Елена<br/>Александровна</h5>
                            <h6 class="category">д.т.н., <a href="https://miet.ru/structure/s/2777" target="_blank">институт ПМТ</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Химия"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/43568" target="_blank"> <img class="img" src="./images/jury_Sherchenkov.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Шерченков<br/>Алексей<br/>Анатольевич</h5>
                            <h6 class="category">д.т.н., <a href="https://miet.ru/structure/s/2777" target="_blank">институт ПМТ</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Экология"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/12871" target="_blank"> <img class="img" src="./images/jury_Sokolova.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Соколова<br/>Татьяна<br/>Юрьевна</h5>
                            <h6 class="category">к.т.н., <a href="https://miet.ru/structure/s/282" target="_blank">кафедра ИГД</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Компьютерная графика и дизайн"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/13192" target="_blank"> <img class="img" src="./images/jury_Evdokimova.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Евдокимова<br/>Мэри<br/>Георгиевна</h5>
                            <h6 class="category">д.п.н., <a href="https://miet.ru/structure/s/3075" target="_blank">институт ЛПО</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Лингвистика"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                <!-- Член жюри: начало -->
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="https://miet.ru/person/18474" target="_blank"> <img class="img" src="./images/jury_Timoshenkov.jpg"> </a>
                        </div>
                        <div class="table">
                            <h5 class="card-caption">Тимошенков<br/>Сергей<br/>Петрович</h5>
                            <h6 class="category">д.т.н., <a href="https://miet.ru/structure/s/2776" target="_blank">институт НМСТ</a></h6>
                            <hr/>
                            <h6><b>Секция</b><br/>"Робототехника, конструирование и технология электронных средств"</h6>
                        </div>
                    </div>
                </div>
                <!-- Член жюри: конец -->

                </div>
            </div>
        </div>
    </main>

<?php
    require_once(__SITE_BASE__ . 'php/dialogs.php');
?>

<?php
    print_login_dialog();
?>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../libs/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../libs/popper-1.14.3.min.js" type="text/javascript"></script>
    <script src="../libs/bootstrap-4.6.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../libs/md5.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function() {

            $("#btn-login-user").click(function(event) {
                $.ajax({
                    type : 'POST',
                    url  : 'ajax/login.php',
                    data : {
                        login           : $('#login').val(),
                        password        : md5($('#password').val()),
                    },
                    beforeSend: function() {
                        $("#message").html('<div class="alert alert-primary">Отправляем данные на сервер.</div>');
                    },
                    success : function(data) {
                        if(data == "ok") {
                            $("#message").html('<p><div class="alert alert-primary">Отправляем данные на сервер.</div></p> <p><div class="alert alert-success">Пользователь найден. Заходим.</div></p>');
                            setTimeout(function(){
                                window.location.replace("<?php echo __SITE_BASE__; ?>home.php");
                            }, 3000);
                        } else {
                            $("#message").html('<p><div class="alert alert-primary">Отправляем данные на сервер.</div></p><p><div class="alert alert-danger">Пользователь с таким логином не найден.</div></p>');
                            setTimeout(function(){
                                window.location.replace("#");
                            }, 3000);
                        }
                    },
                    error : function(data) {
                        $("#message").html('<p><div class="alert alert-primary">Отправляем данные на сервер.</div></p><p><div class="alert alert-warning">От сервера пришло сообщение об ошибке: [' + data + '].</div></p>');
                        setTimeout(function(){
                            window.location.replace("#");
                        }, 5000);
                    }
                });
            });

        });
    </script>
</body>
</html>

