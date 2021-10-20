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

    <title>Творчество юных-2022 : Документы</title>

    <style>
        main {
            padding-top: 20px;
        }
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
</head>

<body>
<?php
    define('__SITE_BASE__', '../');
    require_once(__SITE_BASE__ . 'php/ui.php');
?>

<?php ui_print_menubar(); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo __SITE_BASE__;?>index.php">Главная</a></li>
            <li class="breadcrumb-item active">О конкурсе</li>
            <li class="breadcrumb-item active" aria-current="page">Документы</li>
        </ol>
    </nav>

    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h2>Документы конференции "Творчество юных"</h2>
                <hr/>
                <p>Вы можете ознакомиться с <a href="docs/TYu_2021_Polozhenie.pdf" target="_blank">положением <img src="images/icon_pdf.png"></a> и <a href="docs/TYu_2021_Reglament.pdf" target="_blank">регламентом проведения <img src="images/icon_pdf.png"></a> конференции.</p>
                <p>Научно-практическая конференция "Творчество юных" позволяет представить работы по основным направлениям научных исследований и направлений образовательной деятельности, реализуемым в нашем вузе (для того, чтобы посмотреть аннотацию секции, кликните по соответствующему названию):</p>
                <ul>
                    <li><a href="docs/annotation_math_economics.pdf" target="_blank"><img src="images/icon_pdf.png"> Математика и Экономика</a>
                    <li><a href="docs/annotation_physics.pdf" target="_blank"><img src="images/icon_pdf.png"> Физика</a>
                    <li><a href="docs/annotation_it_and_programming.pdf" target="_blank"><img src="images/icon_pdf.png"> Информационные технологии и программирование</a>
                    <li><a href="docs/annotation_electronics.pdf" target="_blank"><img src="images/icon_pdf.png"> Электроника и микроэлектроника</a>
                    <li><a href="docs/annotation_future_technologies.pdf" target="_blank"><img src="images/icon_pdf.png"> Цифровые технологии будущего</a>
                    <li><a href="docs/annotation_smart_city.pdf" target="_blank"><img src="images/icon_pdf.png"> Умный город</a>
                    <li><a href="docs/annotation_medicine.pdf" target="_blank"><img src="images/icon_pdf.png"> Медицина и здоровьесберегающие технологии</a>
                    <li><a href="docs/annotation_chemistry.pdf" target="_blank"><img src="images/icon_pdf.png"> Химия</a>
                    <li><a href="docs/annotation_ecology.pdf" target="_blank"><img src="images/icon_pdf.png"> Экология</a>
                    <li><a href="docs/annotation_design.pdf" target="_blank"><img src="images/icon_pdf.png"> Компьютерная графика и дизайн</a>
                    <li><a href="docs/annotation_linguistics.pdf" target="_blank"><img src="images/icon_pdf.png"> Лингвистика</a>
                    <li><a href="docs/annotation_construction.pdf" target="_blank"><img src="images/icon_pdf.png"> Робототехника, конструирование и технология электронных средств</a>
                </ul>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../libs/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="../libs/bootstrap-4.6.0/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../libs/md5.js"></script>

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

