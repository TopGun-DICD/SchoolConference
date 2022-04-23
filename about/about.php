<!doctype html>
<html lang="ru">

<?php
    define('__SITE_BASE__', '../');
    require_once(__SITE_BASE__ . 'php/ui.php');
    require_once(__SITE_BASE__ . 'php/config.php');
    require_once(__SITE_BASE__ . 'php/dialogs.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Normal browsers -->
    <link rel="icon" sizes="16x16"      href="../images/favicons/icon_16x16.png"   type="image/png">
    <link rel="icon" sizes="32x32"      href="../images/favicons/icon_32x32.png"   type="image/png">
    <link rel="icon" sizes="96x96"      href="../images/favicons/icon_96x96.png"   type="image/png">
    <link rel="icon" sizes="120x120"    href="../images/favicons/icon_120x120.png" type="image/png">
    <link rel="icon" sizes="192x192"    href="../images/favicons/icon_192x192.png" type="image/png">
    <link rel="icon" sizes="512x512"    href="../images/favicons/icon_512x512.png" type="image/png">

    <!-- Apple Safari -->
    <link rel="apple-touch-icon" sizes="16x16"   href="../images/favicons/icon_16x16.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="32x32"   href="../images/favicons/icon_32x32.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="96x96"   href="../images/favicons/icon_96x96.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicons/icon_120x120.png" type="image/png">
    <link rel="apple-touch-icon" sizes="192x192" href="../images/favicons/icon_192x192.png" type="image/png">
    <link rel="apple-touch-icon" sizes="512x512" href="../images/favicons/icon_512x512.png" type="image/png">

    <!-- Android Chrome -->
    <link rel="manifest" href="img/icons/tu-miet.webmanifest">

    <!-- Windows 8 and 10 -->
    <!--link rel="manifest" href="browserconfig.xml"-->

    <link href="../libs/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../libs/fontawesome-5.0.9/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">

    <title>Творчество юных-2022 : О конкурсе</title>

    <link href="../main.css" rel="stylesheet" type="text/css">

    <style>
        ul.a {
            list-style-type: none;
            line-height: 2;
        }
        .leftimg {
            float:left; /* Выравнивание по левому краю */
            margin: 7px 7px 7px 0; /* Отступы вокруг картинки */
        }
        .rightimg  {
            float: right; /* Выравнивание по правому краю  */
            margin: 7px 0 7px 7px; /* Отступы вокруг картинки */
        }
    </style>
</head>
<body>

<?php ui_print_menubar(); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo __SITE_BASE__;?>index.php">Главная</a></li>
            <li class="breadcrumb-item active">О конференции</li>
            <li class="breadcrumb-item active" aria-current="page">О конкурсе "Творчество юных"</li>
        </ol>
    </nav>

    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <!--img class="img-fluid" src="./img/photos/ond58xCa_is.jpg">
                <img class="img-fluid" src="./img/photos/5jyaW12dvGc.jpg">
                <img class="img-fluid" src="./img/photos/YgaBvO5_mj4.jpg"-->
            </div>
            <div class="col-md-8">
                <h2>Что такое "Творчество юных"?</h2>
                <hr/>
                <p align="justify"><img width="300" src="./images/about1.jpg" class="leftimg"><b>Основная идея конференции</b> – представление результатов научно-технического творчества молодежи, соответствующих перспективным направлениям инновационной деятельности организаций науки и промышленных предприятий Зеленограда.</p>
                <p align="justify"><b>МИЭТ – Московский институт электронной техники</b> имеет уникальный статус Национального исследовательского университета (НИУ) – это показатель признания на высочайшем государственном уровне заслуг вуза в области образования, науки и инноваций. Университет имеет значительную долгосрочную государственную поддержку на развитие и модернизацию образовательного и научного процессов.</p>
                <p align="justify"><img width="300" src="./images/about2.jpg" class="rightimg"><b>МИЭТ входит в число лучших технических вузов Москвы</b> (по уровню подготовки студентов, по развитию IT-инфраструктуры и другим показателям), является ведущим вузом России по подготовке высококвалифицированных специалистов в области электроники, нанотехнологий, IT, телекоммуникаций.</p>
                <p align="justify"><b>По показателям научной деятельности МИЭТ является ведущим вузом России</b>. Ежегодно в университете выполняется свыше 300 научно-исследовательских и опытно-конструкторских работ, общим объёмом более 600 миллионов рублей в год.</p>
                <p align="justify">В вузе созданы предприятия, где <b>на коммерческой основе реализуются результаты уникальных исследований</b> молодых учёных, аспирантов и студентов МИЭТа.</p>
            </div>
            <div class="col-md-2">
                <!--img class="img-fluid" src="./img/photos/ond58xCa_is.jpg">
                <img class="img-fluid" src="./img/photos/5jyaW12dvGc.jpg">
                <img class="img-fluid" src="./img/photos/YgaBvO5_mj4.jpg"-->
            </div>
        </div>
    </main>

<?php
    print_login_dialog($enable_registration);
?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS and then other libs -->
    <script src="../libs/jquery-3.3.1.min.js"                  type="text/javascript"></script>
    <script src="../libs/popper-1.14.3.min.js"                 type="text/javascript"></script>
    <script src="../libs/bootstrap-4.6.0/js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="../libs/md5.js"                               type="text/javascript"></script>

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
                                window.location.replace("./home.php");
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

